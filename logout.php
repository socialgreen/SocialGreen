<?php 
	
	session_start();
	session_destroy(); // oturumları sonlandırır 
	header('Content-Type: text/html; charset=utf-8'); // türkçe karakter hatası olmaması için 


	echo 'Çıkış yapıldı sayfaya yönlendiriliyorsunuz...';
	 echo ' <meta http-equiv="refresh" content="2;URL=login.php">'; // meta yünlendirme kodu 


?>