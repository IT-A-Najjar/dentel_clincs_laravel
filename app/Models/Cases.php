<?php

namespace Cases;

class Cases extends Eloquent {

	protected $table = 'Cases';
	public $timestamps = false;

	public function Patients()
	{
		return $this->belongsTo('Patients');
	}

}