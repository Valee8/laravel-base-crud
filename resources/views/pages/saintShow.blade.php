@extends('layouts.main-layout')

@section('content')

    <h1>
        Santo: {{$saint -> name}}
    </h1>

    Numero miracoli: {{$saint -> number_of_miracles}} - Luogo di nascita: {{$saint -> birth_place}} - Data benedizione: {{$saint -> blessing_date}}
           
    
@endsection