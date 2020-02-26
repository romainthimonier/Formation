<!DOCTYPE html>
<html>
<head>
    <title>Partiel</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
    <header>        
        <nav>
            <div class="container">
                <ul>
                    <li><a href ='index.php'>Accueil </a></li>
                    <li><?php
                        session_start();
                        if (isset($_SESSION['admin'])){
                            echo "<a href='admin.php'>".$_SESSION['admin']."</a>";
                        }else if(isset($_SESSION['user'])){
                            echo "<a href='admin.php'>".$_SESSION['user']."</a>";
                        }else{
                            echo'<a href="connexion.php">Connexion </a>';
                        }
                    ?></li>
                    <li><a href="deconnection.php">Deconnection</a></li><br />
                </ul>
            </div>
        </nav>
    </header>
    <main>
        
        <div class="container">
  