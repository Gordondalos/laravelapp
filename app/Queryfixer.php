<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Queryfixer extends Model
{
    public function getAll(){
	    $queryfixer = Queryfixer::all();
	    return $queryfixer;
    }
}
