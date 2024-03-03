<?php

// $host => Server direction in where the database is stored.
// $dbname => Database name.
// $username => User to access the database.
// $password => User password.

// PDO => Is a function that allow you to connect to database, perform queries, handle errors, regardless the type of database.
// $conn => Is a variable that store a database connection object (PDO instance).

function db_connection ($host, $dbname, $dbusername, $dbpassword) {
    try {
        $conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname); 
        header ("Location:./index.php?msg=Connected database.");
        return $conn;
    } catch (mysqli_sql_exception $error) {
        header ("Location:./index.php?msg=Could not connect to database.");
    }
}

// Create a connection object to the database.
$conn = db_connection ("localhost", "phpdb", "root", "root");