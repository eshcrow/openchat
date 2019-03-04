<?php
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/conf/config.php';

		$gettext=strip_tags($_GET['text']);
		$userlogin=$_GET['userlogin'];

	function check_text_input($link, $gettext, $userlogin) {
		/*Проверим ввод текста*/
		if(isset($gettext) && $gettext !='' ) 
		{	
			$gettext = substr($gettext, 0,300);
		
		if(!preg_match('/^[a-zа-яё0-9\.\,\!\?\;\#\&\/\)\(\-\+\=:\s]+$/ui', $gettext)) 
		{		
			mysqli_query($link, "INSERT INTO chat (id, login, text) values (NULL, '$userlogin', 'Запрещенный символ!')");

		} 
		else 
		{  
		
		/*Запишем в чат */	
		mysqli_query($link, "INSERT INTO chat (id, login, text) values (NULL, '$userlogin', '$gettext')");
	
		 }
		 }

		 }
$link=$result->link;		
		check_text_input($link, $gettext, $userlogin);
require_once 'delete_messages.php';
		delete_messages ($link, $count_all_messages);	
		
?>
