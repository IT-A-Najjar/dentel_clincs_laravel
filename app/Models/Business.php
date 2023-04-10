<?php

namespace Business;

class Business extends Eloquent {

	protected $table = 'Business';
	public $timestamps = false;

	public function Users()
	{
		return $this->belongsTo('Users');
	}

}