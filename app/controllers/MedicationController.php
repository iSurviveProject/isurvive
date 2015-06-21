<?php

class MedicationController extends BaseController {

	public function index(){
		$meds = Medication::all();
		return View::make('medication.list')
			->with('medications', $meds);
	}

	public function show($id){
		$user_meds = Medication::find($id);

		return View::make('medication', array('medications' => $user_meds));
	}

	public function create(){
		// load the create form (app/views/medication/create.blade.php)
		return View::make('medication.create');
	}

	public function store(){
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'      => 'required',
            'dosage'    => 'required|numeric',
            'dosage_size' => 'required|numeric',
            'frequency' => 'required|numeric',
            'count'     => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('medication/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $med = Medication::find($id);
            $med->name          = Input::get('name');
            $med->dosage_volume = Input::get('dosage');
            $med->dosage_unit   = Input::get('dosage_unit');
            $med->frequency     = Input::get('frequency');
            $med->frequency_per = Input::get('frequency_per');
            $med->count         = Input::get('count');
            $med->ndc           = Input::get('ndc');
            $med->save();

            // redirect
            Session::flash('message', 'Successfully updated Medication!');
            return Redirect::to('Medication');
        }
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id){
		// get the nerd
		$med = Nerd::find($id);

		// show the edit form and pass the nerd
		return View::make('medication.edit')
			->with('medications', $med);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id){

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id){
		$med = Medication::find($id);
		$med->delete();

		// redirect
		Session::flash('message', 'Successfully Removed Medication!');
		return Redirect::to('medication');
	}

}