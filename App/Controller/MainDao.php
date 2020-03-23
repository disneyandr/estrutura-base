<?php 
	namespace App\Controller;
	/**
	 * @var $conn
	 */
	class MainDao
	{
		private $host = HOST;
		private $banco = DB_NAME;
		private $username = USER_NAME;
		private $password = PASSWORD;
		public  $conn;

		public function __construct()
		{
			# code...
			$this->getConnection();
		}

		public function getConnection()
		{
			$this->conn = NULL;
			try {
				$this->conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->banco, $this->username, $this->password, array(\PDO::ATTR_PERSISTENT => true));
				$this->conn->query("SET NAMES 'utf8'");
				$this->conn->query('SET character_set_connection=utf8');
				$this->conn->query('SET character_set_client=utf8');
				$this->conn->query('SET character_set_results=utf8');

				// $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
			} catch (\PDOException $e) {

				print "Error!: " . $e->getMessage() . "<br/>";
    			die();
			}
			return $this->conn;
		}

	}
?>