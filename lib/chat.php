<?php
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/conf/config.php';

class printing {
        
	 /*Запрашиваем последние 15 сообщений*/
	    function printing_out($link) { 
	 
	 return $link->query("SELECT * from chat ORDER by id desc LIMIT 15");

	 }
	 
}	
   
    $data = new printing();
    $data=$data->printing_out($result->link);

	//*Выводим в цикле*/
	 	while($val = mysqli_fetch_array($data)) 
		echo '<strong>' . $val['login'] . ' </strong> ' . $val['text'] . '<br/>';
?>
