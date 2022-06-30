<?php

$name = $_POST["name"];
$mail = $_POST["mail"];


$host = "localhost";
$dbname = "energy_generation";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);

if (mysqli_connect_errno()) {
    die("connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO newsletter (firstname, mail)
        VALUES (?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ss",
                                $name,
                                $mail);

mysqli_stmt_execute($stmt);


header("location: index.php");

?>