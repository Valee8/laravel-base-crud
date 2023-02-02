@extends('layouts.main-layout')

@section('content')

    <h1>
        Santo: {{$saint -> name}}
    </h1>

    Luogo di nascita: {{$saint -> birth_place}} - Data benedizione: {{$saint -> blessing_date}}
           
    
@endsection