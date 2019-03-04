<?php

    class count_delete_messages {
	    
	    protected $del;
	   
	/*Количество всех сообщений*/
	    function count_messages ($link) {

	    return mysqli_fetch_array(mysqli_query($link,  "SELECT COUNT(*) FROM chat"));

		
	    }
		
		/*Удалим лишние*/
		
	function delete_messages ($link, $count_all_messages) {
		if ($count_all_messages > 15 )
		{ 
    	$this->del=mysqli_query($link, "DELETE FROM chat ORDER BY id ASC LIMIT 1  ") or exit ('not ok');
        return $this->del;
		}
		 
	}
	
}	
$count_delete_object = new	count_delete_messages();
//запрашиваем все сообщения
$count_all_messages=$count_delete_object->count_messages($result->link);
//удалим
$count_delete_object->delete_messages($result->link, $count_all_messages[0]);


?>
