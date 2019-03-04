<?php
//Дополнительно закрываем сраницу
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/conf/config.php';

class printing {
    
    protected $fetch;
	
	
	 /*Запрашиваем последние 15 сообщений*/
	  function fetchingOut($link) { 
	 
	 $this->fetch = $link->query("SELECT * from chat ORDER by id ASC LIMIT 15");
	 return $this->fetch;
	 
	        
	    }
	 
	 
	 function printingOut($data) { 

	 //*Выводим в цикле*/
	 while($val = mysqli_fetch_array($data)) 
	 echo '<strong>' . $val['login'] . ' </strong> ' . $val['text'] . '<br/>';

	 }
	 
}	
   
    //Коннект к базе
    $result = new Connect();
    $result->mysql();
    $result->link->set_charset("utf8");
    //Вывод
    $data = new printing();
    $data-> printingOut($data->fetchingOut($result->link));


    
?>
