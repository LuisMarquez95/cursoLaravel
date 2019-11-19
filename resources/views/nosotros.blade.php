@extends('layout')
@section('title', 'Nosotros')
@section('content')
    <h1>Nosotros</h1>
    <ul>
        @forelse($portafolio as $portItem)
            <li>{{$portItem['title']}}</li>
            @empty
                <li>No existen Item</li>
            @endforelse
    </ul>
@endsection()
