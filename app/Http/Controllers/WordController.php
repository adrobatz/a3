<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{

	public function index() {

		return 'Here are your words';
	}

//     Route::get('/scoreresult/{word?}', function($word = '') {

//     if($word == '') {
//         return 'Your request did not include a word.';
//     }
//     else {
// 	    return 'Results for the word: '.$word;
//     }

// });


/**
* GET
* /books/{title?}
*/
public function view($word = null) {

	#query the database for all the books that match the title $title

	#reutrn 
	return 'You want to calculate the word '.$word;
}

}