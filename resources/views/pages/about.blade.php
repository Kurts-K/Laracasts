@extends('app')

@section('content')

	@if (true)

	<h1>Contact me John</h1>

	@else

	<h1>Contact me Else</h1>

	@endif


	@foreach ($people as $person)
		<li>${{$person}}</li>

	@endforeach



@stop