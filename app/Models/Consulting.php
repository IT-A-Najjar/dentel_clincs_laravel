<?php

namespace Consulting;

class Consulting extends Eloquent {

	protected $table = 'Consulting';
	public $timestamps = false;

	public function Comments()
	{
		return $this->hasMany('Comments');
	}

}