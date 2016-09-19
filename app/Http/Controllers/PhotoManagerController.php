<?php
namespace App\Http\Controllers;

use Barryvdh\Debugbar\Middleware\Debugbar;
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

	    echo "<pre>";
	        print_r($entity );
	    echo "</pre>";

	    $send_data = array();
	    $send_data['id_quuery'] = $data['id'];
	    $send_data['events'] = json_encode($data);
	    $send_data['user_add'] = 1;
		$send_data['id_client'] = 1;

$entity->id_quuery = $data['id'];
$entity->events = json_encode($data);
$entity->user_add = 1;
$entity->id_client = 1;

	    echo "<pre>";
	    print_r($entity->events);
	    echo "</pre>";

die;
	    $entity->save();
	    return redirect()->route('queryfixer');


    }
}

