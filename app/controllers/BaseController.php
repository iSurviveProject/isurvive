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
        $cd4 = Cd4::where('user.uid', Auth::id())->orderBy('date', 'desc')->get();

        $graphData = array(array('Month', 'Levels'));

        foreach($cd4 as $element){
            array_push($graphData, array(date("Y/m", strtotime($element->date)), $element->level));
        }

		return View::make('dashboard')->with('graphData', $graphData);
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
