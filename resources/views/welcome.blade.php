@extends('layout.page')
@section('title')
	Latter
@endsection
@section('content')
	<div class="jumbotron">
		<h1>Laratter</h1>
		<nav class="nav navbar-default">
			<ul class="nav nav-pills">
				<li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
				<li><a href=""></a></li>
			</ul>
		</nav>
	</div>
	<div class="row">
		@forelse($messages as $message)
			<div class="col-xs-12 col-sm-4">
				<img src="{{$message['image']}}" alt="img" class="img-responsive img-rounded">
				<p class="card-text">{{$message['content']}}
					<a href="/messages/{{$message['id']}}">Leer mas</a>
				</p>
			</div>
			@empty
			<div class=" container alert alert-danger">No hay mensages disponibles.</div>
		@endforelse
	</div>
@endsection