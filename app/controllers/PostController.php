<?php
 
class PostController extends BaseController {
 
	public function index()
	{
		$posts = Post::all();		

 		return View::make('posts.index')->with('posts',$posts);
 
	}
 
	public function lire($id)
	{
 
		$post = Post::find($id);

 
		return View::make('posts.lire')->with('post',$post);
 
	}
	
	public function user($id)
	{
 
		$user = User::find($id);
 
 
		return View::make('posts.user')->with('user',$user);
 
	}

	public function add()
	{
		return View::make('posts.add');

	}
 
 
	public function comment()
	{
 
 
	}
 

}