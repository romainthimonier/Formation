<?php
require_once 'bdd.php';
session_start();

$connect=$_SESSION['userid'];
    $login=$_GET['newlogin'];
    $mail=$_GET['newmail'];
    $pwd=$_GET['newpwd'];    
    
    $query="UPDATE user
        SET login = '$login' , email ='$mail', password = '$pwd' 
        WHERE id_user ='$connect'";
    $reponse=$bdd->query($query);
        echo "<a href='admin.php'>Merci pour cette mise à jour.</a>";

?>