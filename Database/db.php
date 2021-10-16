<?php
class Database{
 
    // specify your own database credentials
	private string $connectionstring = "mysql://uspyiewwt6a47kiq:fhjf5mht8clgqbs8@x8autxobia7sgh74.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/kirnyw4ar361d8qd";
    private string $host = "x8autxobia7sgh74.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private string $db_name = "kirnyw4ar361d8qd";
    private string $username = "uspyiewwt6a47kiq";
    private string $password = "fhjf5mht8clgqbs8";
    public $conn;

    // get the database connection
    public function getConnection(): ?PDO
    {
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>