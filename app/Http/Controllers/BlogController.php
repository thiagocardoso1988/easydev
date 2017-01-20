<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	//
	private $constructmode = true;


	public function __construct()
	{
		//echo $this->constructmode;
		echo config('app.env');
	}


	public function index()
	{
		if (!(config('app.env') == 'local')){
			if (!($this->constructmode == true)) {
				//return view('blog.index');
				return 'outra coisa';
			};
		}
		return view('construct');
	}
}
