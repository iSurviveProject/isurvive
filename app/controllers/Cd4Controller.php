<?php

class Cd4Controller extends BaseController {

	public function index(){
		return View::make('cd4.show');
	}

	public function show(){
		return View::make('cd4.show');
	}

	public function store(){
		$cd4 = new Cd4();
		$cd4->level = Input::get('level');

		$date = date('Y-m-d H:i:s', strtotime( Input::get('date')));
		$cd4->date = $date;
		$cd4->save();
	}

}