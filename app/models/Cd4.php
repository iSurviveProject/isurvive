<?php

class Cd4 extends Eloquent {
	protected $table = 'cd4';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('User');
    }
}