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
		return View::make('dashboard');
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
