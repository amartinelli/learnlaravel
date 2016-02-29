
	@extends('template')

	@section('title')
	 Posts do blog

	@stop

	@section('content')

    <h1> Post: {{$id+1}} </h1>

    <h1> From: {{$posts[$id][0]}} </h1>
    <h1> Post: {{$posts[$id][1]}} </h1>
    <h1> Data: {{$posts[$id][2]}} </h1>
	
    <h1> <a href="../posts"> Voltar </a> </h1>
    
	@stop
