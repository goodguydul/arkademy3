<?php 
//Buatlah sebuah fungsi/method untuk membersihkan dan mengelompokan input angka menjadi bagian-bagian yang dipisah dengan garis tengah “-”, dan setiap bagian terdiri dari 3 angka. Jika bagian terakhir hanya terdiri dari 1 angka, maka bisa mengambil/memindahkan angka di baris sebelumnya sehingga angka di bagian terakhir dan bagian selanjutnya menjadi 2-2. Bersihkan angka dari spasi dan garis tengah yang tidak sesuai. Input yang diterima adalah string bukan hanya angka!
//
    function groupNumber($input){

        // pertama buang karakter selain alphanumerik
        $pertama    = preg_replace("/[^a-zA-Z0-9]/", "", $input); 

        // kedua split/bagi $pertama menjadi 1 karakter 1 array
        $kedua      = str_split($pertama);

        $array      = array();
        $arrayFinal = array();

        // perulangan untuk membagi 3 karakter per element array. 
        for ($i=0; $i < count($kedua); $i++) { 
            if($i%3) {
                $array[floor($i/3)] .= $kedua[$i];
            } else {
                $array[$i/3] = $kedua[$i];
            } 
        }

        // perulangan untuk element array yang karakternya kurang dari 3. Jadi element array yang terletak sebelum element array yang kurang dari 3 digabung dengan element yang kurang dari 3 tersebut menjadi 1 element, lalu dibagi menjadi 2 array, yang masing-masing memiliki 2 karakter. lalu dimasukkan kedalam element array.
        for ($i=0; $i < count($array); $i++)  { 
            if (strlen($array[$i]) < 2) {
                if (strlen($array[$i-1])== 3) {
                    $temp       = $array[$i-1].$array[$i];
                    $temp2      = str_split($temp,2);
                    $array[$i-1]= $temp2[0];
                    $array[$i]  = $temp2[1];

                }
            }
        }

        //membuat kembali string dengan delimiter "-"
        return implode('-', $array); 
    }

    echo groupNumber("993141 -1 1323 14-232111");
?>