<?php

class Cd4Controller extends BaseController {

	public function index(){
		return View::make('cd4.show');
	}

	public function show(){
		return View::make('cd4.show');
	}

	public function store(){
		var_dump(Input::all()); exit;
		$rules = array(
			'level' => 'required',
			'date' => 'required'
			);

		$validation = Validator::make(Input::all(), $rules);
		if ($validation->fails())
			return Redirect::to('cd4')->withErrors($validation->messages());


		$cd4 = new Cd4();
		$cd4->level = Input::get('level');
		$cd4->date = Input::get('date');
		$cd4->save();
	}
	public function update(){
		return "Hello World";
	}

}