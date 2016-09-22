<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

use App\Todo;

class TodoController extends Controller
{
    public function index(Todo $entity){
    	$allTodo = $entity->getAll();
	    return view('todo.index',['todos'=>$allTodo]);

    }

	public function show(Todo $entity, $id){
		$oneTodo = $entity->getById($id);
		return view('todo.show',['todo'=>$oneTodo]);

	}

	public function close_task(Todo $entity, Request $request){

		$request->input();
		// проверим данные на валидность
		$rules = array('id'=>'required');
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::route('todo-show')->withErrors($validator);
			// причем в файле отображающим данный роут должно быть реализован вывод ошибок
			// смотри там реализовано



		}
		$id = $request['id'];
		$res = $entity->closeById($id);

		if($res){
			return redirect()->route('todo-show', $id);
		}



	}
}
