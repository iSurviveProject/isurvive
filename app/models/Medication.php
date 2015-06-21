<?php

class Medication extends Eloquent {
	protected $table = 'medications';
    public $timestamps = false;
	public function user() {
		$this->belongsTo('User');
	}
}