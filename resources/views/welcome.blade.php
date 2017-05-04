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
		<form action="/messages/create" method="post">
			{{csrf_field()}}
			<div class="form-group @if($errors->has('message')) has-error @endif">
			
				<input type="text" name="message" class="form-control" placeholder="Que estas pensando?">
				@if($errors->has('message'))
					@foreach($errors->get('message') as $error)
						<lable class="control-label">{{$error}}</label>
					@endforeach
				@endif
			</div>
		</form>
	</div>
	<div class="row">
		@forelse($messages as $message)
			<div class="col-xs-12 col-sm-4">
				<img src="{{$message->image}}" alt="img" class="img-responsive img-rounded">
				<p class="card-text">{{$message->content}}
					<a href="/messages/{{$message->id}}">Leer mas</a>
				</p>
			</div>
			@empty
			<div class=" container alert alert-danger">No hay mensages disponibles.</div>
		@endforelse
	</div>
	<div class="row">
		 <div class="col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3">
			@if(count($messages))
				<div class="text-center">
					{{$messages->links('pagination::bootstrap-4')}}			
				</div>
			@endif
		 </div>
	</div>
@endsection