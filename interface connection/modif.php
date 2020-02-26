<?php
require_once 'bdd.php';
session_start();

$date=$_GET['date'];
$titre=$_GET['titre'];
$description=$_GET['description'];
$nouveau=$_GET['id_article'];

$query="UPDATE article
    SET date = '$date', titre = '$titre', description = '$description'
    WHERE id_article = '$nouveau'";
    $reponse=$bdd->query($query);

    echo "<a href='admin.php'>Merci pour cette mise à jour.</a>";
?>