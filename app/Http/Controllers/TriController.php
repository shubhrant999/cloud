<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriController extends Controller
{
    //
    public function index(){
    	$title='main';
    	return view('triangle.main')->with('title', $title);
    }

    public function about(){
    	$title='about';
    	return view('triangle.about')->with('title', $title);
    }

    public function services(){
    	
    	$data = array(
    		'title' => 'services',
    		'description' => 'this is my descripion'
    	);

    	return view('triangle.services')->with($data);
    }
}
