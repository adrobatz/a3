{{-- /resources/views/scrabble/calculate.blade.php --}}
@extends('layouts.master')

@section('content')
<!-- Welcome Text -->
    <h1>Scrabble Word Score Calculator</h1>
    <p>Want to figure out what points you could get with the scrabble word you built?</p>
    <p>Click the button below to figure it out!</p>
<!-- enter the app -->
    <button class="button"><a href="/calculate"> Calculate my Score!</a></button>

@endsection