<?php

class Profile extends Eloquent {
	protected $table = 'profiles';
	protected $primaryKey = 'uid';
    public $timestamps = false;

	public function user()
	{
		return $this->belongsTo('User');
	}
}