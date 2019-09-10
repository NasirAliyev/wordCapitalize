<?php
/*
	We need a method that accepts a string as input, and returns it in title case as the output.

	What is Title Case?

	Title case means that the first letter of each word is capitalized.

	Examples:
	  Input: "THE LAZY DOG WALKS Home."
	  Ouput: "The Lazy Dog Walks Home."

	  Input: "the lazy dog walks 1 block home."
	  Ouput: "The Lazy Dog Walks 1 Block Home."

	  Input: "a LazY dOG waLkS homE."
	  Ouput: "A Lazy Dog Walks Home."
*/

function wordCapitalize(string $str) {

    $resp = '';

    for($i = 0; $i < strlen($str); $i++) {
        $resp .= (isset($str[$i - 1]) && $str[$i - 1] === ' ') || $i === 0 ? strtoupper($str[$i]) : strtolower($str[$i]);
    }

    return $resp;
}

function wordCapitalizeViaExplode(string $str) {

    $strArr = explode(" ", $str);

    foreach ($strArr as &$word) {
        $word = ucfirst(strtolower($word));
    }

    return implode(" ", $strArr);
}

// test cases

$testArr = [
    "THE LAZY DOG WALKS Home.",
    "the lazy dog walks 1 block home.",
    "a LazY dOG waLkS homE.",
];

foreach ($testArr as $val) {
    echo wordCapitalize($val) . PHP_EOL;
    echo wordCapitalizeViaExplode($val) . PHP_EOL;
    echo PHP_EOL;
}

