<?php

class BaseDao {

    private $conn;

    /**
    * constructor of dao class
    */
    public function __construct(){
        try {

        /** TODO
        * List parameters such as servername, username, password, schema. Make sure to use appropriate port
        */

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $schema = "websep";


        /** TODO
        * Create new connection
        */

        $this->conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);

        // set the PDO error mode to exception
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
    }

}
?>
