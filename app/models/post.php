<?php


class Post extends Eloquent {

	public function user()
	{
		return $this->belongsTo('user');
	}
	
	public function comments()
	{
		return $this->hasMany('comment');
	}

}