<?php

class database {

    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $conn;




    public static function DB_Start () {

        //Connect to database
        self::$conn = new mysqli(self::$servername, self::$username, self::$password);

        //Connection Fail if fail
        if (!self::$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
    }

    public static function DB_Create ($dbname) {

        self::DB_Start();            
        
        $sql = "CREATE DATABASE $dbname";
        if (self::$conn->query($sql) === TRUE) {

            echo "Database created successfully";

        } else {

            echo "Error creating database: " . self::$conn->error;

        }

    }

}

?>