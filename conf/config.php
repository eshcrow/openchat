<?php
class connect {
	
	public $link;
	protected $host = 'localhost';
	protected $user = 'u0643076_sneg';
	protected $password = 'Zfrae4pN+vlF';
	protected $db_name = 'u0643076_sneg';
	
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
