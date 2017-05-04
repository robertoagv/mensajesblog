<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){

    	$messages  = Messages::paginate(10);

    	return view('welcome', [
    		'messages' => $messages
    		]);

	}

}
