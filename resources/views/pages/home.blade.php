@extends('layouts.main-layout')

@section('content')

    <h1>
        Santi
    </h1>

    <ul>
        @foreach ($saints as $saint)

            <li>
                <a href="/saint/{{$saint -> id}}">{{$saint -> name}}</a> - Numero miracoli: {{$saint -> number_of_miracles}}
            </li>
        
        @endforeach 
    </ul>
    
@endsection