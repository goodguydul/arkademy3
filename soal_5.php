<?php 
// Buatlah fungsi yang mempunyai sebuah parameter yang bekerja untuk menghitung jumlah huruf hidup pada sebuah string.
// Contoh:
// count_vowels(‘programmer’)
// Maka akan dicetak/return: 3
// count_vowels(‘hmm..’)
// Maka akan dicetak/return: 0

	function countVowel($string){
		// menggunakan regex yang mendeteksi huruf vokal a,i,u,e,o.
		return preg_match_all('/[aiueo]/i',$string);

	}

	echo countVowel("hmmm");
?>
