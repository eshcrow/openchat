<?php
//Перенаправим при попытке вызвать из браузера
if($_SERVER['REQUEST_URI'] == '/conf/config.php') header("Location: ../index.php");

class Connect {
	
	public $link;
	protected $host = 'localhost';
	protected $user = 'root';
	protected $password = '123';
	protected $db_name = 'chat';
	
protected function mysqld () {
	
	$this->link=mysqli_connect($this->host, $this->user, $this->password, $this->db_name ) or exit('No connection...');
		 
	  }
	  
	  function mysql () {
			$this->mysqld();
			  
		}
	}

?>
