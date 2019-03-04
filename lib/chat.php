<?php
//Дополнительно закрываем сраницу
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/conf/config.php';

class printing {
    
    protected $fetch;
	
	
	 /*Запрашиваем последние 15 сообщений*/
	    function fetching_out($link) { 
	 
	 $this->fetch = $link->query("SELECT * from chat ORDER by id ASC LIMIT 15");
	 return $this->fetch;
	 
	        
	    }
	 
	 
	 	    function printing_out($data) { 

	 	//*Выводим в цикле*/
	 	while($val = mysqli_fetch_array($data)) 
		echo '<strong>' . $val['login'] . ' </strong> ' . $val['text'] . '<br/>';

	 }
	 
}	
   
    $data = new printing();
    $data-> printing_out($data->fetching_out($result->link));


    
?>
