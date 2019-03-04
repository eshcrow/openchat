<?php
//Файл коннекта
require_once CONF.'config.php';	
require_once STYLE.'header.html';
?>
		
		
		
	<div id="updatebox"  style="overflow: auto; width: 100%; height: 150px;" > 


		
<?php
//Файл с сообщениями чата, 15 сообщ. каждые 3 сек
require_once LIB.'chat.php';	
?>
	
	
	</div>
		 
<?php
require_once LIBJS.'scroll_to_bottom.js';
require_once LIBJS.'cross_object.js';
require_once HTML.'send_form.html';
require_once LIBJS.'send.js';
require_once LIB.'delete_messages.php';	
    
        /*Удалим лишние сообщения*/
        
       delete_messages ($result->link, $count_all_messages);
        
require_once STYLE.'footer.html';
?>
