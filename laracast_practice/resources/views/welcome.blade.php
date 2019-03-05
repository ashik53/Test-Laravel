@extends('layout')


@section('title', 'Laracst')


@section('content')


	@foreach ($names as $name)

		<li> {{ $name }}</li>

	@endforeach

	<br>

	@foreach ($foo as $f)

		<li> {{ $f }}</li>

	@endforeach



@endsection