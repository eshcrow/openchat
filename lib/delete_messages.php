<?php

	/*Количество всех сообщений*/
		$query = mysqli_query($link, "SELECT COUNT(*) FROM chat");
		$row = mysqli_fetch_array($query);
		

	/*Удалим лишние*/
		$count_all_messages=$row['0'];
	
	function delete_messages ($link, $count_all_messages) {
		if ($count_all_messages > 15 )
		{ 
		mysqli_query($link, "DELETE FROM chat	 ORDER BY id ASC LIMIT 1  ") or exit ('not ok');
		mysqli_close($link);

		}
		 
	}
?>
