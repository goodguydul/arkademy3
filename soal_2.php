<?php 
// Pada sebuah form, terdapat 2 buah field yaitu: username dan password. Buatlah method/function untuk memvalidasi field-field tersebut, dengan requirement sebagai berikut:
// ●       Disarankan menggunakan REGEX
// ●       Format username: merupakan kombinasi dari huruf kecil, huruf besar dan angka dengan panjang 5-9 karakter. Username tidak boleh diawali dengan angka / karakter special.
// ●       Format password: merupakan kombinasi dari huruf kecil, huruf besar minimal satu karakter, angka minimal satu karakter, dan karakter spesial minimal satu karakter dan harus memiliki karakter simbol ‘@’  dan panjang minimal 8 karakter.
// Clue:
// Peserta hanya diminta membuat function validasi, tidak perlu membuat form HTML.
// Examples:
// -        is_username_valid(‘@sony’)
//     return false
// -        is_username_valid(‘Ayu99v’)
//     return true
// -        is_password_valid(‘p@ssW0rd#’)
//     return true
// -        is_password_valid(‘C0d3YourFuture!#’)
//     return false

	/**
		@Author 	: 	abdulhalimzhr
		@githuburl 	:	https://github.com/goodguydul/
	*/

	function is_usernameValid($username){

		// regex : menerima kombinasi lowercase, uppercase, dan angka dengan panjang min 5 max 9
		if (preg_match('/^[a-zA-Z0-9]{5,9}$/', $username)) {

			return true; // kalau sesuai, maka return true/1

		}else{
			
			return 0; // jika tidak maka return 0/false, kenapa menggunakan 0? karena kalau menggunakan false, maka return tidak akan menampilkan apa-apa
		}
	}
	
	function is_passwordValid($password){

		//regex : hanya menerima aplhabet lowercase, uppercase min 1 char, numeric 1 char, dan special char min 1. (?=.*) << lookaround positive. 
		if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.*[@])(?=.{8,})/', $password)) {
			
			return true; // kalau sesuai, maka return true/1

		}else{
			
			return 0;
		}
	}

$x = is_passwordValid("abdulGanteng12@"); //return 1
print_r($x);

?>
