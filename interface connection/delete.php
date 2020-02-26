<?php
require_once 'bdd.php';
session_start();

$id=$_GET['id_article'];

$sup= "DELETE FROM article WHERE id_article=".$id;
$delete=$bdd->query($sup);
    header ('location:admin.php');
?>