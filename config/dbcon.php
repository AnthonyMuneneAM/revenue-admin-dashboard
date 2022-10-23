<?php

    // variables for local database:

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "revenuedashboard";

    // creating a variable for connecting db to project:
    $con = mysqli_connect($host, $username, $password, $database);

    // checking db connection:
    if(!$con)
    {
        die("Connection Failed: ". mysqli_connect_error());
    }
    /* 
        else
        {
            echo "Connected successfully";
        }
    */
?>