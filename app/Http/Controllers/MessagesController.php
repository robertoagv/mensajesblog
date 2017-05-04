<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateMessageRequest;
use App\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(Messages $message){
    	// buscar el Message por id
    	//$message = Messages::find($id);

    	return view("messages.show", ['message'=>$message]);
    }

    public function create(CreateMessageRequest $request){

    	$message = Messages::create([
    		'content' => $request->input('message'),
    		'image' => 'http://lorempixel.com/600/338?' .mt_rand(0, 1000)
    		]);


    	return redirect('/messages/' .$message->id);
    }
}
