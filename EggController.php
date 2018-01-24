<?php
require BaseController.php;

class EggController extends BaseController {
	
	public $hatch;
	public $steps;
	protected $conn = $this->connect();
	
	public function __construct()
	{
		if ($_POST['type'] == 'hatch')
		{
			$this->hatch($_POST);
		} else if ($_POST['type'] == 'steps') {
			$this->step($_POST);
		}
	}
//TODO add list of fields to insert query
//TODO add list of fields to update query
	public function hatch()
	{
		$this->conn->query("INSERT INTO pokemontable VALUES($_POST)");
		$this->conn->query("DELETE FROM eggtable WHERE id=$_POST['egg_id']");
		$this->cleanup();
	}
	
	protected function step() 
	{
		$this->conn->query("UPDATE eggtable SET steps=$_POST['steps'] WHERE id=$_POST['egg_id']");
		$this->cleanup();
	}
}