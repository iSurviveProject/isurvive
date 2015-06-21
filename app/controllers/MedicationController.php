<?php

class MedicationController extends BaseController {

	public function index(){
		$meds = Medication::all();
		return View::make('medication.list')->with('medications', $meds);
	}
	public function show($id){
		$user_meds = Medication::find($id);

		return View::make('medication', array('medications' => $user_meds));
	}
	public function create()
	{
		// load the create form (app/views/medication/create.blade.php)
		return View::make('medication.create');
	}
	public function store(){}
	public function edit(){}
	public function update(){}
	public function delete(){}

}