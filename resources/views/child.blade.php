@extends('layouts.master')
@section('titulo','Pagina hijo')
@section('sidebar')
	@parent
	<p> Estoy en hijo del sidebar master</p>
@endsection

@section('content')
	@include('partials.message')
@endsection
