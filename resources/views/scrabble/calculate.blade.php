{{-- /resources/views/scrabble/calculate.blade.php --}}
@extends('layouts.master')

@section('content')

<h1>Scrabble Word Score Calculator</h1>
    <form method='GET' action='/calculate'>
        <label for="word">Your Word:</label>
        <input type="text" name="word" id="word">
        <p class="required">*Don't forget! A valid scrabble word is 2 or more letters!*</p> 

            @if($errors->get('word'))
                <ul class="error">
                @foreach($errors->get('word') as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            @endif
        <ul>
            <li><input type="radio" name="score" value="none">None*</li>
            <li><input type="radio" name="score" value="double">Double Word Score*</li>
            <li><input type="radio" name="score" value="triple">Triple Word Score*</li>
        </ul>
        <p class="required">*required</p>
            @if($errors->get('score'))
                <ul class="error">
                @foreach($errors->get('score') as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            @endif
        <div class="checkbox">
        <input type='checkbox' name='bingo'>
        <label>Did you use all 7 tiles? You get bingo!</label>
                </div>
        <input class="button" type="submit" name="button">
    </form>

    @if($finalScore != null)
        <div>
            <h3>Your word was: {{ $wordEntry }}</h3>
            <h3>Your final score is: {{ $finalScore }}</h3>
        </div>
    @endif

@endsection