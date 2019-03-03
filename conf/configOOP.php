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

$res = new connect();
$res->mysql();

$data = $res->link->query("SELECT * from chat ORDER by id desc LIMIT 1")->fetch_assoc();
	
	foreach ($data as $val)
	print($val) . ' '; 


?>
