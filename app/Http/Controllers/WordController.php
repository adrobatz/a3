<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WordController extends Controller
{
    /**
	* GET
    * /calculate
	*/
    public function calculate(Request $request) {
        // # Define the final score parameter
        $finalScore = '';
        // # Get the value of 'word' from the form and assign to a variable
        // # this needs to be more than 2 letters
        $wordEntry = $request->input('word', null);

        // # continue through the app if the word validates
        if($wordEntry) {
            // 	# Get the list of scrabble letters from scrabbleLetters.php
            require database_path().'/scrabbleLetters.php';
            # split the word into an array
            $word = str_split($wordEntry);
            #flip the array made from the word
            $flipped = array_flip($word);
            # match the letters from the new array to letters from the array data
            $intersect = array_intersect_key($scrabbleLetters, $flipped);
            # add the values of the word together
            $wordSum = array_sum($intersect);


        // # choose if the word has earned double, triple, or no extra points
        // # this is required
            $bonus = '';

            if(isset($_GET['score'])) {
                if($_GET['score'] == 'triple') {
                    $bonus = '3'*$wordSum;
                } elseif($_GET['score'] == 'double') {
                    $bonus = '2'*$wordSum;
                } else {
                    $bonus = $wordSum;
                }
            }

            # check off to earn an extra 50 points
            if ($request->has('bingo')) {
	           $finalScore = $bonus + '50';
            } else {
	           $finalScore = $bonus;
            }
    
            $this->validate($request, [
                'word' => 'required|min:2',
                'score' => 'required',
            ]);
       }

    // # put the entries on the page
    return view('scrabble.calculate')->with([
            'wordEntry' => $wordEntry,
            'finalScore' => $finalScore

        ]);

    }
}
