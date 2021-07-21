<?php
	echo 'Masukan username :';
	input $username;
	echo 'Masukan password';
	input $password;
	
	if ($username == $username.database){
		if ($password == $password.database){
			echo 'succes!';
			go to main.php
		}
		else
			echo 'fail!';
			go to login.php;
	}else{
		echo 'username salah!';
		go to login.php;
	}
	
	// ini merupakan halaman login yang akan pertama kali dilihat oleh user
?>