<?php 
//Buatlah sebuah fungsi/method untuk membersihkan dan mengelompokan input angka menjadi bagian-bagian yang dipisah dengan garis tengah “-”, dan setiap bagian terdiri dari 3 angka. Jika bagian terakhir hanya terdiri dari 1 angka, maka bisa mengambil/memindahkan angka di baris sebelumnya sehingga angka di bagian terakhir dan bagian selanjutnya menjadi 2-2. Bersihkan angka dari spasi dan garis tengah yang tidak sesuai. Input yang diterima adalah string bukan hanya angka!
//
    /**
        @Author     :   abdulhalimzhr
        @githuburl  :   https://github.com/goodguydul/
    */

    function cetak_gambar($n){

        //cek ganjil atau tidak
        if ($n % 2 == 1) { 

            //perulangan untuk jumlah baris
            for ($i=1;$i<=$n;$i++){
                //perulangan mencetak pola tengah
                for ($b=1;$b<=$n;$b++){
                    //kalau berada di baris tengah, maka print * semua
                    if ($i==ceil($n/2)){
                        echo "*";
                    }else if ($b==1 || $b==$n){ // kalau posisi karakter pertama dan terakhir, print *
                        echo "*";
                    }else{                      // selain itu print =
                        echo "=";
                    }
                }
                echo "\n";
            }
        }else{
            echo $n . " tidak ganjil!";
        }
        
    }
    cetak_gambar(5);
?>