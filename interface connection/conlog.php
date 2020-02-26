<?php
require_once 'bdd.php';   

// $query=" SELECT * FROM user WHERE login= '".$_GET['login']."' AND password= '".$_GET['password']."'";
// $connexion=$bdd->query($query);
$name =$_GET['login'];
$pwd =$_GET['password'];
$password=hash('sha512',$password);
$sth = $bdd->prepare('SELECT *
    FROM user
    WHERE login= :login AND password = :password');
$sth->bindValue(':login', $name, PDO::PARAM_INT);
$sth->bindValue(':password', $pwd, PDO::PARAM_STR);
$sth->execute();

$user_id = $sth->fetch();
          
    if(($_GET['login']==$user_id['login']) && ($_GET['password']==$user_id['password']) && ($user_id['role']=="admin")){
        session_start();
        $_SESSION['admin']=$user_id['login'];
        $_SESSION['adminid']=$user_id['id_user'];
        header('location:admin.php');
        exit;        
    }else if(($_GET['login']==$user_id['login']) && ($_GET['password']==$user_id['password']) && ($user_id['role']=="user")){
        session_start();
        $_SESSION['user']=$user_id['login'];
        $_SESSION['userid']=$user_id['id_user'];        
        header('location:admin.php');            
    }else{
        header ('location:index.php');
    }     
?>