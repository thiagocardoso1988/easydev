<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class SiteController extends Controller
{


	public function __construct() { }


    /**
     * Display the main view of the site
     * 
     * @return view
     */
    public function index() 
    {
    	return view('site.index');
    }

    /**
     * @param  Request
     * @return [type]
     */
    public function sendmail(Request $request){
    	// validate the data sent by the form
    	//$validator = $this->validate($request, [
    	$validator = Validator::make($request->all(), [
    		'inputNome' => 'required',
    		'inputEmail' => 'required|email',
    		'inputAssunto' => 'required',
    		'inputMsg' => 'required',
		], [
			'inputNome.required' => 'O campo "nome" é obrigatório.',
			'inputEmail.required' => 'O campo "email" é obrigatório.',
			'inputEmail.email' => 'O email informado não é válido.',
			'inputAssunto.required' => 'O campo "assunto" é obrigatório.',
			'inputMsg.required' => 'O campo "mensagem" é obrigatório.',
		]);
    	// return back to the form with errors
    	if ($validator->fails()){
    		$redirect = redirect()->to($request->header('referer'). '#contact');
    		return $redirect 
					->withErrors($validator)
					->withInput();
    	}
    	// store the variables
    	$nome = $request->input('inputNome');
    	$email = $request->input('inputEmail');
    	$fone = $request->input('inputFone');
    	$assunto = $request->input('inputAssunto');
    	$msg = $request->input('inputMsg');
    	// send the email
    	return $request->input('inputNome');
    }
}
