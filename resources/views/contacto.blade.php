@extends('layout')
@section('title', 'Contacto')
@section('content')
    <h1>Estamos en contacto</h1>
    <form action="{{}}" method="post">
        <input type="text" name="nombre" id="">
        <input type="number" name="numero" id="">
        <input type="email" name="correo" id="">
        <textarea name="contenido" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar">
    </form>
@endsection()
