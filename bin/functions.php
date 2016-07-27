<?php

$log = "";

function elfegulate($text) {
	
	writeLog("elfegulate(): " . $text);
	
	$words = explode(" ", $text);
	$word_count = count($words);
	$elfegged_characters = array();
	$elfegged_word = "";
	$text = "";
	
	for ($w = 0; $w < $word_count; $w++) {
		
		writeLog("elfegulate(): Word " . $w . ": " . $words[$w]);
		
		$characters = str_split($words[$w]);
		$character_count = count($characters);
		
		for ($c = 0; $c < $character_count; $c++) {
			
			writeLog("elfegulate(): Word " . $w . ", Character " . $c . ": " . $characters[$c]);
			
			if ($characters[$c] == "a" || $characters[$c] == "e" || $characters[$c] == "i" || $characters[$c] == "o" || $characters[$c] == "u") {
				# Elfegulate
				writeLog("elfegulate(): '" . $characters[$c] . "' is a vowel!");
				array_push($elfegged_characters, $characters[$c] . "lfeg");
			} else {
				writeLog("elfegulate(): '" . $characters[$c] . "' is NOT a vowel!");
				array_push($elfegged_characters, $characters[$c]);
			}

		}
		
		$elfegged_array_count = count($elfegged_characters);
		for ($e = 0; $e < $elfegged_array_count; $e++) {
			$elfegged_word = $elfegged_word . $elfegged_characters[$e];
		}
		
		$text = $text . " " . $elfegged_word;
		$elfegged_word = "";
		$elfegged_characters = array();

	}
	
	return $text;
	
}

function writeLog($text) {
	
	$GLOBALS['log'] = $GLOBALS['log'] . "<br/>\n" . $text;
	
}

function displayLog() {
	
	echo "<hr><strong>Debug Log</strong><br/>" . $GLOBALS['log'];
	
	
}


?>