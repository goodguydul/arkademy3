<?php 
// Buatlah function yang mempunyai sebuah parameter, fungsi tersebut mempunyai tugas untuk  mencetak string acak sepanjang 32 karakter sebanyak jumlah parameter.
// Pada function tersebut buatlah pengecekan untuk memastikan tidak ada string(data) yang sama.
// Clue:
// Function dijalankan:
// cetak(3);
// Akan dicetak di layar
// da2c312dfe804ef5bd318133a342251a
// 79n89a9mdfe804ef5b18133a342251o
// 6e576057da174c4189f7ea8341946aed

	/**
		@Author 	: 	abdulhalimzhr
		@githuburl 	:	https://github.com/goodguydul/
	*/


		function cetak($n){
			for ($i=0; $i < $n; $i++) { 
				$hash[$i] = str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"); //meng-generate random karakter.
				if ($i > 0) {
					if ($hash[$i] == $hash[$i-1]) { //cek apakah elemen string sama dengan elemen string sebelumnya
						$hash[$i] = str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"); // simpan kedalam array		 	
					}
				}
				
			}

			for ($i=0; $i < $n ; $i++) { 
				echo md5($hash[$i])."\n"; // agar menjadi 32 karakter, jadikan md5. karena md5 otomatis menghasilkan hash 32 karakter.
			}
		}

		cetak(3);

?>
