<?php
namespace App\Http\Controllers;

use Barryvdh\Debugbar\Middleware\Debugbar;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Queryfixer;

use App\User;

use App\Photo;

class PhotoManagerController extends Controller
{
    public function index(Queryfixer $entity){
	    $queryfixer = $entity->getAll();
	    return view('welcome',['queryfixer'=>$queryfixer]);
    }

    public function photo_add(){
    	$one = $_REQUEST['q'];
	    return view('onefoto',['one'=>$one]);
    }

    public function create(Photo $entity, Request $request){

    	$data = $_POST['add'];
		$entity->id_quuery = $data['id'];
		$entity->events = json_encode($data);
		$entity->user_add = 1;
		$entity->id_client = 1;

	    $entity->save();
	    return 200;


    }
}

