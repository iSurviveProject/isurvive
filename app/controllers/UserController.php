<?php

class UserController extends BaseController {

	public function index()
	{
		return Redirect::to('user/list');
	}

	public function getList()
	{
		$users = User::all();
		return View::make('user.list')->with('users', $users);
	}

	public function show(){}
	public function create(){}
	public function store(){}
	public function edit(){}
	public function update(){}
}