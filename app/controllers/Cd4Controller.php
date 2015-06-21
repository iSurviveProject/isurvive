<?php

class Cd4Controller extends BaseController {

	public function index(){
        if( Auth::check() ) {
            $cd4 = Cd4::all();
            return View::make('cd4.show')->with('cd4', $cd4);
        }else{
            return Redirect::to('login');
        }

	}

	public function show(){
		return View::make('cd4.show');
	}

	public function store(){
        if( Auth::check() ) {
            $cd4 = new Cd4();
            $cd4->level = Input::get('level');
            $date = date('Y-m-d H:i:s', strtotime( Input::get('date')));
            $cd4->date = $date;
            $cd4->uid = Auth::id();
            $cd4->save();

            Session::flash('success', 'CD4 level saved!');

            return Redirect::to('cd4');
        }else{
            return Redirect::to('login');
        }
	}

}