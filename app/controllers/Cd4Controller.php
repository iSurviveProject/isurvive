<?php

class Cd4Controller extends BaseController {

	public function index(){
		return View::make('cd4.show');
	}

	public function show(){
		return View::make('cd4.show');
	}

	public function create(){
		return "Hello World";
	}

	public function store(){
		return "Hello World";
	}
	public function edit(){
		return "Hello World";
	}
	public function update(){
		return "Hello World";
	}

}