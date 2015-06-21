<?php

class Profile extends Eloquent {
	protected $table = 'profiles';
	protected $primaryKey = 'uid';

	public function user()
	{
		return $this->belongsTo('User', 'uid');
	}
}