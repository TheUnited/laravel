<?php


class Comment extends Eloquent {

	public function posts()
	{
		return $this->belongsTo('post');
	}

	public function user()
	{
		return $this->belongsTo('user');
	}

}