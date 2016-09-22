<?php

namespace App;


use DB;


use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
	public function getAll(){
		$allTodo = Todo::all();
		return $allTodo;
	}

	/**
	 * @return array
	 * get $id entity
	 */
	public static function getById($id)
	{
		$id = (int)$id;
		$oneTodo = Todo::where('id','=',$id)->firstOrFail();
		return $oneTodo;
	}

	public static function closeById($id)
	{
		$id = (int)$id;
		$oneTodo = Todo::where('id','=',$id)->firstOrFail();
		return true;
	}

	public static function getUserIssue($id)
	{
		$id = (int)$id;
		$todo = DB::table('todos')->where('user', '=', $id)->get();
		return $todo;
	}


}
