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
		echo config('app.env');
	}


	public function index()
	{
		if (!(config('app.env') == 'local')){
			if (!($this->constructmode)) {
				//return view('blog.index');
				return 'outra coisa';
			};
		}
		return view('construct');
	}
}
