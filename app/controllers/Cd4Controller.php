<?php

class Cd4Controller extends BaseController {

	public function index(){
        $cd4 = Cd4::all();
		return View::make('cd4.show')->with('cd4', $cd4);
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

        Redirect::to('cd4');
	}

}