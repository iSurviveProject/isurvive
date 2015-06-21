<?php

class UserController extends BaseController {

	public function index()
	{
		$users = User::all();
		return View::make('user.list')->with('users', $users);
	}

	public function edit($user_id = null)
	{
		if (empty($user_id))
			return Redirect::to('user')
				->withErrors(new MessageBag(array('User ID not provided')));

		$user = User::find($user_id);

		if (empty($user))
			return Redirect::to('user')
				->withErrors(new MessageBag(array('User not found')));

		return View::make('user.edit')->with('user', $user);
	}

	public function update($user_id = null)
	{
		if (empty($user_id))
			return Redirect::to('user')
				->withErrors(new MessageBag(array('User ID not provided')));

//		if (!Auth::user()->permission->solder_full && !Auth::user()->permission->solder_users && $user_id != Auth::user()->id)
//			return Redirect::to('dashboard')
//				->with('permission','You do not have permission to access this area.');

		$user = User::find($user_id);

		if (empty($user))
			return Redirect::to('user')
				->withErrors(new MessageBag(array('User not found')));

		$rules = array(
				'email' => 'required|email|unique:users,email,' . $user_id,
				'username' => 'required|min:3|max:30|unique:users,username,' . $user_id
				);

		if (Input::get('password1'))
			$rules['password1'] = "min:3|same:password2";

		$validation = Validator::make(Input::all(), $rules);

		if ($validation->fails())
			return Redirect::to('user/edit/'. $user_id)->withErrors($validation->messages());

		$user->email = Input::get('email');
		$user->username = Input::get('username');
		if (Input::get('password1'))
		{
			$user->password = Hash::make(Input::get('password1'));
		}

		/* Update User Permissions */
//		if (Auth::user()->permission->solder_full || Auth::user()->permission->solder_users)
//		{
//			$perm = $user->permission;
//
//			/* If user is original admin, always give full access. */
//			if ($user->id == 1)
//			{
//				$perm->solder_full = true;
//			} else {
//				$perm->solder_full = Input::get('solder-full') ? true : false;
//			}
//			$perm->solder_users = Input::get('manage-users') ? true : false;
//			$perm->solder_keys = Input::get('manage-keys') ? true : false;
//			$perm->solder_clients = Input::get('manage-clients') ? true : false;
//
//			/* Mod Perms */
//			$perm->mods_create = Input::get('mod-create') ? true : false;
//			$perm->mods_manage = Input::get('mod-manage') ? true : false;
//			$perm->mods_delete = Input::get('mod-delete') ? true : false;
//
//			/* Modpack Perms */
//			$perm->modpacks_create = Input::get('modpack-create') ? true : false;
//			$perm->modpacks_manage = Input::get('modpack-manage') ? true : false;
//			$perm->modpacks_delete = Input::get('modpack-delete') ? true : false;
//			$modpack = Input::get('modpack');
//
//			if (!empty($modpack))
//				$perm->modpacks = $modpack;
//			else
//				$perm->modpacks = null;
//
//			$perm->save();
//		}

		//Security logging
//		$user->updated_by_user_id = Auth::user()->id;
//		$user->updated_by_ip = Request::ip();

		$user->save();

		return Redirect::to('user')->with('success','User edited successfully!');
	}

	public function create()
	{
//		if (!Auth::user()->permission->solder_full && !Auth::user()->permission->solder_users)
//			return Redirect::to('dashboard')
//				->with('permission','You do not have permission to access this area.');

		return View::make('user.create');
	}

	public function store()
	{	
		$rules = array(
			'username' => 'required|min:3|max:30|unique:users',
			'password' => 'required|min:3'
			);

		$validation = Validator::make(Input::all(), $rules);
		if ($validation->fails())
			return Redirect::to('user/create')->withErrors($validation->messages());

//		$creator = Auth::user()->id;
//		$creatorIP = Request::ip();

		$user = new User();
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

//		$perm = new UserPermission();
//		$perm->user_id = $user->id;
//
//		$perm->solder_full = Input::get('solder-full') ? true : false;
//		$perm->solder_users = Input::get('manage-users') ? true : false;
//		$perm->solder_keys = Input::get('manage-keys') ? true : false;
//		$perm->solder_clients = Input::get('manage-clients') ? true : false;
//
//		/* Mod Perms */
//		$perm->mods_create = Input::get('mod-create') ? true : false;
//		$perm->mods_manage = Input::get('mod-manage') ? true : false;
//		$perm->mods_delete = Input::get('mod-delete') ? true : false;
//
//		/* Modpack Perms */
//		$perm->modpacks_create = Input::get('modpack-create') ? true : false;
//		$perm->modpacks_manage = Input::get('modpack-manage') ? true : false;
//		$perm->modpacks_delete = Input::get('modpack-delete') ? true : false;
//		$modpack = Input::get('modpack');
//
//		if (!empty($modpack))
//			$perm->modpacks = $modpack;
//		else
//			$perm->modpacks = null;
//
//		$perm->save();

		return Redirect::to('user');
		//return Redirect::to('user/edit/'.$user->id)->with('success','User created!');
	}

	public function destroy($user_id = null)
	{
		if (empty($user_id))
			return Redirect::to('user')
				->withErrors(new MessageBag(array('User ID not provided')));

		$user = User::find($user_id);
		if (empty($user))
			return Redirect::to('user')
				->withErrors(new MessageBag(array('User not found')));

		//$user->permission()->delete();
		$user->delete();

		return Redirect::to('user/')->with('success','User deleted!');
	}

	public function showLogin()
	{
		// show the form
		return View::make('login');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			//'username'    => 'required|username', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'username'     => Input::get('username'),
				'password'  => Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata, true)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return Redirect::to('user');

			} else {

				// validation not successful, send back to form 
				return Redirect::to('login');

			}

		}
	}

	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
	}
}