<?php
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/conf/config.php';


        /*Текст и имя из формы*/
		$gettext=strip_tags($_GET['text']);
		$userlogin=$_GET['userlogin'];
		
		
class send_messages {    		


    protected $send;
    protected $chat="chat";

    
	function check_text_input($link, $gettext, $userlogin) {
		
		/*Проверим ввод текста*/
		if(isset($gettext) && $gettext !='' ) 
		{	
			$gettext = substr($gettext, 0,300);
		
		if(!preg_match('/^[a-zа-яё0-9\.\,\!\?\;\#\&\/\)\(\-\+\=:\s]+$/ui', $gettext)) 
		{		
		$this->send=mysqli_query($link, "INSERT INTO ". $this->chat ." (id, login, text) values (NULL, '$userlogin', 'Запрещенный символ!')");

		} 
		else 
		{  
		
		/*Запишем в чат */	
		$this->send=mysqli_query($link, "INSERT INTO ". $this->chat ." (id, login, text) values (NULL, '$userlogin', '$gettext')") or exit ('Не получилось...');
	
	    	}
		   
		}
		
		return $this->send;   
		
		}
		 

		 
}
/*Отправим сообщения*/
$send_messages = new send_messages();
$send_messages->check_text_input($result->link, $gettext, $userlogin);
/*Удалим лишние*/

require_once 'delete_messages.php';
	
		
?>
