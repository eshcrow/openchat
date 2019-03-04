<?php
//Дополнительно закрываем сраницу
	if($_SERVER['REQUEST_URI'] == '/lib/delete_messages.php') header("Location: ../index.php");
    class Count_delete_messages {
	    
	    protected $del;
	    protected $chat='chat';
	   
	/*Количество всех сообщений*/
	 function countMessages ($link) {

	
		 return mysqli_fetch_array(mysqli_query($link,  "SELECT COUNT(*) FROM ". $this->chat .""));

		
	    }
		
		/*Удалим лишние*/
		
	function deleteMessages ($link, $count_all_messages) {
	
		if ($count_all_messages > 15 )
		{ 
    		$this->del=$link->query("DELETE FROM ". $this->chat ."	 ORDER BY id ASC LIMIT 1  ") or exit ('not ok');
        	return $this->del;
		}
	}
	
}	


$count_delete_object = new	Count_delete_messages();
//запрашиваем все сообщения
$count_all_messages=$count_delete_object->countMessages($result->link);
//Удалим
$count_delete_object->deleteMessages($result->link, $count_all_messages[0]);


?>
