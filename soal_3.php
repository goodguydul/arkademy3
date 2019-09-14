<?php 
// Buatlah method/function untuk mencetak segitiga seperti gambar berikut. Parameter yang diberikan adalah jumlah baris dengan ketentuan minimal 3. Jumlah karakter di baris pertama merupakan ganjil. 

	function printTriangle($n){
		// cek terlebih dahulu apakah range lebih dari atau sama dengan 3 atau tidak (sesuai rules soal)
		if ($n >= 3) {

			// looping in reversed(range $n)
			for ($i=$n; $i >=1 ; $i--) { 

				// looping untuk ruang kosong ditengah
				for ($ruang=$i; $ruang < $n ; $ruang++) { 
					echo " ";
				}

				// looping untuk bintang-bintang
				for ($star=1; $star < 2*$i; $star++) {  
					if($i == $n || $star == 1 || $star == 2*$i - 1){
			            echo  "*";
					}
			        else{
			            echo  " ";
			        }
				}
				echo "\n";
			}
		}else{
			echo "input minimum adalah 3";
		}
		
	}
	
	printTriangle(9);

	//nb : di soal tertera "printTriangle(5)" namun outputnya ada 4 baris. berarti soal tersebut typo.
?>