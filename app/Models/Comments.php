<?php

namespace Comments;

class Comments extends Eloquent {

	protected $table = 'Comments';
	public $timestamps = false;

	public function Consulting()
	{
		return $this->belongsTo('Consulting');
	}

}