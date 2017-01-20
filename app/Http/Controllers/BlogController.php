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
		if (!(env('APP_ENV') == 'local')){
			if (!($this->constructmode)) {
				//return view('blog.index');
				return 'outra coisa';
			};
		}
		return view('construct');
	}
}
