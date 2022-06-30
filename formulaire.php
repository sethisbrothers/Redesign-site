<?php

$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$genre = $_POST["genre"];
$mail = $_POST["mail"];
$confirmer = $_POST["confirmer"];
$numéro = $_POST["numéro"];
$pays = $_POST["pays"];
$etude = $_POST["etude"];
$thematique = $_POST["thematique"];
$campus = $_POST["campus"];





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

$sql = "INSERT INTO formulaire (prenom, nom, genre, mail, confirmer, numéro, pays, etude, thematique, campus)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssssissss",
                                $prenom,
                                $nom,
                                $genre,
                                $mail,
                                $confirmer,
                                $numéro,
                                $pays,
                                $etude,
                                $thematique,
                                $campus);

mysqli_stmt_execute($stmt);

header("location:program.php");

?>