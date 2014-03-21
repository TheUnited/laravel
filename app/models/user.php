<?php


class User extends Eloquent {

	public function posts()
	{
		return $this->hasMany('post');
	}
	
	public function comments()
	{
		return $this->hasMany('comment');
	}

}