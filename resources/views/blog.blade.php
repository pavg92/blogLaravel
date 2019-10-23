@extends('layouts.master')

@section('titulo', 'Inicio')

@section('content')
	<h1>Bienvenido al curso</h1>
	
	
    @foreach ($posts as $post)
        <h1>{{ $post->tittle }}</h1>
        <h3>{{ $post->description }}</h3>
    @endforeach
@endsection