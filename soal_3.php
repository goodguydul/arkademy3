<?php 
// Buatlah program yang dapat menemukan berapa banyak sebuah kata/frasa dari sebuah string baik itu dari kiri atau kanan.

// REQUIREMENT:
// Input dari user sebanyak 2 parameter berupa string dan kata/frasa yang ingin dicari.
// Input kata/frasa pencarian tidak bisa lebih panjang dibandingkan string.
// Output berupa banyaknya kata/frasa pencarian yang ditemukan dari string yang telah diberikan.
	/**
		@Author 	: 	abdulhalimzhr
		@githuburl 	:	https://github.com/goodguydul/
	*/
	function hitungkata($cari,$string){

		if (strlen($cari) < strlen($string)) {

			$strrev = strrev($string);

			echo "ditemukan ". (preg_match_all("/(?<=(nana))/",$strrev) + preg_match_all("/(?<=(nana))/",$string))." kali";

		}else{
			echo "Jumlah karakter yang dicari melebihi jumlah karakter String!";
		}
	}

	hitungkata("nana","banananana");

//cara kerja : jika jumlah karakter kata yang dicari kurang dari jumlah karakter string, maka proses dilakukan. Pertama-tama siapkan 2 variabel untuk String yang dibaca dari kiri, dan String yang dibaca dari kanan. String yang dibaca dari kanan dibuat berdasar string reversed. Lalu lakukan pregmatchall / pencarian kata sesuai dengan pattern positive lookahead dengan mencocokkan kata pada setiap index karakter. setelah itu dilakukan juga terhadap String yang di-reversed. lalu jumlahkan total kata yang ditemukan dari kiri dan kanan.
?>

