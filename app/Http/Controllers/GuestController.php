<?php namespace App\Http\Controllers;

class GuestController extends Controller 
{

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		return view('index');
	}

	public function FoodRegister()
	{
		return view('FoodRegister');
	}

}
