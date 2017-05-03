<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){

    	$messages  = [
    		[
	    		'id' => 1,
	    		'content' => 'Este es el primer mensaje',
	    		'image' => 'http://lorempixel.com/600/338?1'
    		],
    		[
                'id' => 2,
                'content' => 'Este es el 2do mensaje',
                'image' => 'http://lorempixel.com/600/338?2'
    		],
    		[
                'id' => 3,
                'content' => 'Este es otro mensaje',
                'image' => 'http://lorempixel.com/600/338?3'
    		],
    		[
                'id' => 4,
                'content' => 'Este es el ultimo mensaje',
                'image' => 'http://lorempixel.com/600/338?4'
    		]
    	];

    	return view('welcome', [
    		'messages' => $messages
    		]);

	}

}
