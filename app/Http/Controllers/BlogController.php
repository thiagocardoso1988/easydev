<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
	//
	private $env;


	public function __construct()
	{
		$this->env = config('app.env');
		echo env('APP_ENV');
	}


	public function index()
	{
		if ($this->env == 'local') {
			//return view('blog.index');
			return 'test';
		};
		return 'comming soon...';
	}
}
