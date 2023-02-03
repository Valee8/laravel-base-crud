@extends('layouts.main-layout')

@section('content')

    <h1>
        Create new saint
    </h1>

    <form method="POST" action="{{ route('saint.store') }}">
        @csrf

        <label for="name">Name: </label>
        <input type="text" name="name">
        <br>
        <label for="birth_place">Birth Place: </label>
        <input type="text" name="birth_place">
        <br>
        <label for="blessing_date">Blessing Date: </label>
        <input type="date" name="blessing_date">
        <br>
        <label for="number_of_miracles">Number of miracles: </label>
        <input type="number" name="number_of_miracles">
        <br>
        <input type="submit" value="Create">

    </form>

@endsection