<?php

$servername = "localhost";
            $username = "root";
            $password = "";
            $database = "energy_generation";

            //create connexion
            $conn = new mysqli($servername, $username, $password, $database);

            //check connexion
            if ($conn->connect_error){
                die("connection failed : " . $conn->connect_error);
            }

?>