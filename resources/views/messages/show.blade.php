@extends('layout.page')
@section('title')
	Latter-Message
@endsection
@section('content')
	<h1 class="h3">{{$message->id}}</h1>
	<img class="img-rounded" src="{{$message->image}}" alt="">
	<p class="card-text">{{$message->content}}</p>
	<small class="text-muted">{{$message->created_at}}</small>
@endsection
