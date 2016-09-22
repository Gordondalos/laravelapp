<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function getAll(){
		$allPost = Post::all();
		return $allPost;
	}

	public function getOnePostSlug($slug){
		$post = Post::where('slug','=',$slug)->firstOrFail();
		return $post;

	}

}
