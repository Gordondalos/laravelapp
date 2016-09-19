<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Queryfixer;

use App\User;



class photoManagerController extends Controller
{
    public function index(Queryfixer $entity){
	    $queryfixer = $entity->getAll();
	    return view('welcome',['queryfixer'=>$queryfixer]);
    }

    public function photo_add(){
    	$one = $_REQUEST['q'];
	    return view('onefoto',['one'=>$one]);
    }

    public function create(Queryfixer $entity, Request $request){

    	$data = $_POST['add'];
	    var_dump($data);
	    dd($entity);

//	    $send_data = array();
//	    $send_data['id_quuery'] = $data['id'];
//	    $send_data['events'] = json_encode($data);
//	    $send_data['user_add'] = Auth::user()->getId();
//		$send_data['id_client'] = 1;
//
//	    dd($send_data);
//
//	    $entity->create($send_data);
//	    return redirect()->route('queryfixer');


    }
}

