@extends('layouts.app')

@section('title', '| Usunąć komentarz?')

@section('content')
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Czy chcesz usunąć ten komentarz?</h1>
			<p>
				<strong>Nick:</strong> {{ $comment->username }}<br>
				<strong>Email:</strong> {{ $comment->email }}<br>
				<strong>Komentarz:</strong> {{ $comment->comment }}
			</p>

			{{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
				{{ Form::submit('Tak, usuń ten komentarz', ['class' => 'btn btn-lg btn-block btn-danger']) }}
			{{ Form::close() }}
		</div>
	</div>

@endsection