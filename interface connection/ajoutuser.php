<?php
require_once 'bdd.php';
session_start();

$id=$_SESSION['userid'];
$date=$_GET['date'];
$titre=$_GET['titre'];
$description=$_GET['description'];


$query="INSERT INTO article(date, titre, description,id_user) VALUES('$date','$titre','$description','$id')";
$execution=$bdd->query($query);
       
    echo "<a href='admin.php'>Merci pour cette mise à jour.</a>";
?>