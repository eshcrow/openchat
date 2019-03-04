<?php
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/conf/config.php';
//Дополнительно закрываем сраницу
	if($_SERVER['REQUEST_URI'] == '/lib/send.php') header("Location: ../index.php");;	

        /*Текст и имя из формы*/
		$gettext=strip_tags($_GET['text']);
		$userlogin=$_GET['userlogin'];
		
		
class Send_messages {    		


    protected $send;
    protected $chat="chat";

    
	function checkTextInput($link, $gettext, $userlogin) {
		
		/*Проверим ввод текста*/
		if(isset($gettext) && $gettext !='' ) 
		{	
			$gettext = substr($gettext, 0,300);
		
		if(!preg_match('/^[a-zа-яё0-9\.\,\!\?\;\#\&\/\)\(\-\+\=:\s]+$/ui', $gettext)) 
		{		
		$this->send=$link->query("INSERT INTO ". $this->chat ." (id, login, text) values (NULL, '$userlogin', 'Запрещенный символ!')");

		} 
		else 
		{  
		
		/*Запишем в чат */	
		$this->send=$link->query("INSERT INTO ". $this->chat ." (id, login, text) values (NULL, '$userlogin', '$gettext')") or exit ('Не получилось...');
	
	    	  }
		    }
		 return $this->send;   
		 }
		 

		 
}
//Коннект к базе
$result = new Connect();
$result->mysql();
$result->link->set_charset("utf8");

/*Отправим сообщения*/
$send_messages = new Send_messages();
$send_messages->CheckTextInput($result->link, $gettext, $userlogin);
/*Удалим лишние*/

require_once 'delete_messages.php';
	
		
?>
