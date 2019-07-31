
@extends('layouts.app')

@section('title', '| Edytuj komentarz')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Edytuj komentarz</h1>
			
			{{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) }}
			
				{{ Form::label('username', 'Nick:') }}
				{{ Form::text('username', null, ['class' => 'form-control', 'disabled' => '']) }}
			
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', null, ['class' => 'form-control', 'disabled' => '']) }}
			
				{{ Form::label('comment', 'Komentarz:') }}
				{{ Form::textarea('comment', null, ['class' => 'form-control']) }}
			
				{{ Form::submit('Update Comment', ['class' => 'btn btn-block btn-success', 'style' => 'margin-top: 15px;']) }}
			
			{{ Form::close() }}
		</div>
	</div>

@endsection