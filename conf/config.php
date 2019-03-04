<?php
class connect {
	
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
$result = new connect();
$result->mysql();
$result->link->set_charset("utf8");

?>
