<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	//
	private $constructmode = false;


	public function __construct()
	{
		//echo $this->constructmode;
		//echo config('app.env');
	}


	public function index()
	{
		if (!($this->constructmode == true)) {
			return view('blog.index');
		};
		return view('construct');
	}
}
