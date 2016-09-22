<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PostController extends Controller
{
	public function index(Post $entity){
		$allPost = $entity->getAll();
//		$allPost = Post::get();
		return view('post/index',['posts'=>$allPost]);
	}


	public function getPost(Post $entity, $slug){
		$post = $entity->getOnePostSlug($slug);
		return view('post/show',['post'=>$post]);

	}

}
