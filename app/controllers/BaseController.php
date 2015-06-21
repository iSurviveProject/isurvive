<?php

class BaseController extends Controller {
	public function __construct()
	{
		$this->beforeFilter('auth', array('except' => array('showLogin', 'doLogin', 'doLogout')));
	}

	public function auth(){
		if( ! Auth::check() ) {
			return Redirect::to('login');
		}

	}

	public function dashboard() {
        $cd4 = Cd4::where('uid', Auth::id())->get();
        $cd4 = $cd4::orderBy('date', 'desc');

        $graphData = array(array('Month', 'Levels'));

        $user_meds = Medication::where('uid', '=', Auth::id());

        foreach($cd4 as $element){
            array_push($graphData, array(date("Y/m", strtotime($element->date)), $element->level));
        }

		return View::make('dashboard')->with(array('graphData' => $graphData, 'meds' => $user_meds));
	}
	
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
