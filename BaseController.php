<?php

class BaseController{
	
	protected $db_host = '74.128.197.169';
	protected $db_user = 'deepack3d_poke';
	protected $db_pass = 'empasis01';
	protected $db_base = 'deepack3d_poke';
	protected $connection;
	
	public function connect()
	{
			return $this->connection = new mysqli($this->db_host , $this->db_user , $this->db_pass , db_base);
	}
	
	public function cleanup($connection)
	{
		$this->connection->close();
	}
}
$test = new BaseController;
var_dump($test);exit;