<?php

namespace Illnesses;

class Illnesses extends Eloquent {

	protected $table = 'Illnesses';
	public $timestamps = true;

	public function Patients()
	{
		return $this->belongsTo('Patients');
	}

}