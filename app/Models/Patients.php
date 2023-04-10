<?php

namespace Patients;

class Patients extends Eloquent {

	protected $table = 'Patients';
	public $timestamps = true;

	public function Users()
	{
		return $this->belongsTo('Users');
	}

	public function Illnesses()
	{
		return $this->belongsTo('Illnesses');
	}

	public function Cases()
	{
		return $this->hasMany('Cases');
	}

}