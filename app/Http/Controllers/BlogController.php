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
		echo env('APP_ENV');
	}


	public function index()
	{
		if (!($this->constructmode) && !(env('APP_ENV') == 'local')) {
			//return view('blog.index');
			return 'test';
		};
		return view('construct');
	}
}
