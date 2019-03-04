<?php
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/conf/config.php';
//Дополнительно закрываем сраницу
	if($_SERVER['REQUEST_URI'] == '/lib/send.php') header("Location: ../index.php");;	

        /*Текст и имя из формы*/
		$gettext=$_GET['text'];
		$userlogin=$_GET['userlogin'];
		
		
class Send_messages {    		


    protected $send;
    protected $chat="chat";
    protected $login;
    protected $text;
    
	function checkTextInput($link, $gettext, $userlogin) {
		

		$gettext = substr($gettext, 0,300);
		$userlogin=substr($userlogin, 0,15);;
		
		/*Проверим ввод текста*/
		if(isset($gettext) && $gettext !='' ) 
		{	
			
		
		if(!preg_match('/^[a-zа-яё0-9\.\,\!\?\;\#\&\/\)\(\-\+\=:\s]+$/ui', $gettext)) 
		{		
		$this->send=$link->query("INSERT INTO ". $this->chat ." (id, login, text) values (NULL, 'Чат', 'Запрещенный символ!')");

		} 
		else 
		{  
		
	
		$this->login=addslashes($userlogin);
		$this->text=addslashes($gettext);
	    $param_1=$this->login;
	    $param_2=$this->text;
	    
		/*Запишем в чат */	
		$this->send=$link->query("INSERT INTO ". $this->chat ." (id, login, text) values (NULL,  '$param_1', '$param_2')") or exit (' :( ');
	
	    	  }
		    }
		 return $this->send;   
		 }
		 

		 
}
//Коннект к базе
$connection_to = new Connect();
$connection_to->mysql();
$connection_to->link->set_charset("utf8");

/*Отправим сообщения*/
$send_messages = new Send_messages();
$send_messages->CheckTextInput($connection_to->link, $gettext, $userlogin);

/*Удалим лишние*/
require_once 'delete_messages.php';
	
		
?>
