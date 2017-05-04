<?php

Route::get('/', 'PageController@home');

Route::get('/messages/{message}', 'MessagesController@show');

Route::post('/messages/create', 'MessagesController@create');

