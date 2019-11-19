@extends('layout')
@section('title', 'Home')
@section('content')
    <h1>Hola {{$nombre ?? "Invitado"}}</h1>
    @endsection()
