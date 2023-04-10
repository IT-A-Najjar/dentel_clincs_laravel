<?php

namespace Users;

class Users extends Eloquent {

	protected $table = 'Users';
	public $timestamps = true;

	public function Patients()
	{
		return $this->hasMany('Patients');
	}

	public function Business()
	{
		return $this->hasMany('Business');
	}

	public function Events()
	{
		return $this->hasMany('Events');
	}

}