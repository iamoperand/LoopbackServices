<?php

namespace App\Http\Controllers;


class PagesController extends Controller {
	

	public function getIndex(){

	return view ('index');

	} 
	
	
	public function getAbout(){

	return view ('about');

	}
	

	public function getServices(){

	return view ('services');

	}


	public function getContact(){

	return view ('contact');

	}

}
