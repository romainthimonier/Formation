<?php
require_once 'bdd.php';
session_start();

$login=$_SESSION['adminid'];
    $pwd=$_GET['newpwd'];
    $login=$_GET['newlogin'];
    $mail=$_GET['newmail'];
    $query="UPDATE user
        SET login = '$login' , email ='$mail', password = '$pwd'
        WHERE id_user ='$login'";
            $reponse=$bdd->query($query);
        echo "<a href='admin.php'>Merci pour cette mise à jour.</a>";

?>