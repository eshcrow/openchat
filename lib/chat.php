<?php
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/conf/config.php';
	
	function printing_out($link) {
	    
	 /*Запрашиваем последние 15 сообщений*/
	$chat=mysqli_query($link, "SELECT * FROM chat  ORDER BY id ASC LIMIT 15");
	
	/*Выводим в цикле*/
	 	while($val = mysqli_fetch_array($chat)) 
		echo '<strong>' . $val['login'] . ' </strong> ' . $val['text'] . '<br/>';
		

	}
		printing_out($link);
?>
