@extends('app');

@section('content');

<h1>Article Edit: {{$article->title}}</h1>


	{!! Form::model($article, ['method'=>'PATCH', 'action'=>['ArticlesController@update', $article->id]]) !!}
	<div class="form-group">
		{!!Form::label('title', 'Title:')!!}
		{!!Form::text('title', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('body', 'Body:')!!}
		{!!Form::textarea('body', null, ['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!!Form::submit('Add drticle', null, ['class'=>'btn btn-primary form-control'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('published_at', 'Published:')!!}
		{!!Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control'])!!}
	</div>

	{!! Form::close() !!}

	@include('errors.list')




@stop
