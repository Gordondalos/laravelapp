<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Queryfixer;



class photoManagerController extends Controller
{
    public function index(){

	    $queryfixer = Queryfixer:: all();

	    return view('welcome',['queryfixer'=>$queryfixer]);
    }
}

