<?php

class Medication extends Eloquent {
	protected $table = 'medications';

	public function user() {
		$this->belongsTo('User');
	}
}