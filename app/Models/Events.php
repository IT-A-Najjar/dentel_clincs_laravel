<?php

namespace Events;

class Events extends Eloquent {

	protected $table = 'Events';
	public $timestamps = false;

	public function Users()
	{
		return $this->belongsTo('Users');
	}

}