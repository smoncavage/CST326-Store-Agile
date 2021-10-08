<?php
class Database{
 
    // specify your own database credentials
    private string $host = "cst323php.mysql.database.azure.com";
    private string $db_name = "appdata";
    private string $username = "adminuser";
    private string $password = "NaVy.2005";
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