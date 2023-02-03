@extends('layouts.main-layout')

@section('content')

    <h1>
        Santi
    </h1>

    <ul>
        @foreach ($saints as $saint)

            <li>
                <a href="{{ route('show', ['id' => $saint -> id]) }}">{{$saint -> name}}</a> - Numero miracoli: {{$saint -> number_of_miracles}}  - 
                <a href="{{ route('saint.destroy', ['id' => $saint -> id]) }}">Delete</a>
            </li>
        
        @endforeach 
    </ul>
    
@endsection