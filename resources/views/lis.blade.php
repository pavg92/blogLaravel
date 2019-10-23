@extends('layouts.master')
@section('titulo','Pagina hijo')
@section('sidebar')
	@parent
	
@endsection

@section('content')
	@include('partials.lista')
@endsection