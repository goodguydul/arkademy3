<?php 
// Pada sebuah form, terdapat 2 buah field yaitu: username dan password. Buatlah method/function untuk memvalidasi field-field tersebut, dengan requirement sebagai berikut:
// ●   	Disarankan menggunakan REGEX
// ●   	Format username: merupakan kombinasi dari huruf kecil dengan panjang 5-9 karakter. Username tidak boleh terdapat huruf besar/angka/karakter special.
// ●   	Format password: merupakan kombinasi dari huruf kecil, huruf besar minimal satu karakter, angka minimal satu karakter, dan karakter spesial minimal satu karakter. Panjang password minimal 8 karakter..
// Clue:
// Peserta hanya diminta membuat function validasi, tidak perlu membuat form HTML.
// Examples:
// -        is_username_valid(‘cod3r)
// 	return false
// -        is_username_valid(‘siska’)
// 	return true
// -        is_password_valid(‘p4s$gW’)
// 	return false
// -        is_password_valid(‘codeYourFuture!123)
// 	return true


	function is_usernameValid($username){

		// regex : hanya menerima alphabet lowercase dengan panjang min 5 max 9
		if (preg_match('/^[a-z]{5,9}$/', $username)) {

			return true; // kalau sesuai, maka return true/1

		}else{
			
			return 0; // jika tidak maka return 0/false, kenapa menggunakan 0? karena kalau menggunakan false, maka return tidak akan menampilkan apa-apa
		}
	}
	
	function is_passwordValid($password){

		//regex : hanya menerima aplhabet lowercase, uppercase min 1 char, numeric 1 char, dan special char min 1. (?=.*) << lookaround positive. 
		if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/', $password)) {
			
			return true; // kalau sesuai, maka return true/1

		}else{
			
			return 0;
		}
	}

$x = is_passwordValid("abdulGanteng12$"); //return 1
print_r($x);

// Positive Lookahead (?=.*[a-z])
// 	Assert that the Regex below matches
// 	.* matches any character (except for line terminators)
// 	* Quantifier — Matches between zero and unlimited times, as many times as possible, giving back as needed (greedy)
// 	Match a single character present in the list below [a-z]
// 	a-z a single character in the range between a (index 97) and z (index 122) (case sensitive)
// Positive Lookahead (?=.*[A-Z])
// 	Assert that the Regex below matches
// 	.* matches any character (except for line terminators)
// 	* Quantifier — Matches between zero and unlimited times, as many times as possible, giving back as needed (greedy)
// 	Match a single character present in the list below [A-Z]
// 	A-Z a single character in the range between A (index 65) and Z (index 90) (case sensitive)
// Positive Lookahead (?=.*[0-9])
// 	Assert that the Regex below matches
// 	.* matches any character (except for line terminators)
// 	* Quantifier — Matches between zero and unlimited times, as many times as possible, giving back as needed (greedy)
// 	Match a single character present in the list below [0-9]
// 	0-9 a single character in the range between 0 (index 48) and 9 (index 57) (case sensitive)
// Positive Lookahead (?=.*[!@#\$%\^&\*])
// 	Assert that the Regex below matches
// 	.* matches any character (except for line terminators)
// 	* Quantifier — Matches between zero and unlimited times, as many times as possible, giving back as needed (greedy)
// 	Match a single character present in the list below [!@#\$%\^&\*]
// 	!@# matches a single character in the list !@# (case sensitive)
// 	\$ matches the character $ literally (case sensitive)
// 	% matches the character % literally (case sensitive)
// 	\^ matches the character ^ literally (case sensitive)
// 	& matches the character & literally (case sensitive)
// 	\* matches the character * literally (case sensitive)
// Positive Lookahead (?=.{8,})
// 	Assert that the Regex below matches
// 	.{8,} matches any character (except for line terminators)
// 	{8,} Quantifier — Matches between 8 and unlimited times, as many times as possible, giving back as needed (greedy)
?>
