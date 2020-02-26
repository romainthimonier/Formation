<?php
require_once 'bdd.php';

$login=$_GET['login'];
$password=$_GET['password'];
$password=hash('sha512',$password);
$email=$_GET['mail'];


$query=" INSERT INTO  user (login, password, email, role) value('$login','$password','$email','user')";
$execution=$bdd->query($query);
    echo'<a href="index.php">Merci de votre inscription</a>';
?>