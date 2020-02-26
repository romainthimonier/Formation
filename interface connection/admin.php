<?php
    require_once 'header.php';
    require_once 'bdd.php';
    
    if (isset($_SESSION['admin'])) {
        if ($_SESSION['admin']);
?>   
<div class="admin">
<h1>Administration</h1>
    
    <h3><a href='ajouter.php'>Créer une nouvelle pratique</a></h3>
    <h3>Modifier :</h3>
        <?php 
            $requete='SELECT * FROM article';
                $index=$bdd->query($requete);
                foreach($index as $info){
                    echo "<h4><a href='modifier.php?id_article=".$info['id_article']."'>".$info['titre']." </a></h4>";
                }
        ?><br>
    <h3>Supprimer :</h3>
        <?php 
            $requete='SELECT * FROM article';
                $index=$bdd->query($requete);
                foreach($index as $info){
                    echo "<h4><a href='delete.php?id_article=".$info['id_article']."'>".$info['titre']." </a></h4>";
                }
                echo "<h4 class='pwd'><a href='password.php'>Modifier son mots de passe</a><br>
                    <a href='profil.php'>Modifier son profil</a></h4>";
        ?>
</div>
<?php
    }else if (isset($_SESSION['user'])) {
        if ($_SESSION['user']);
?>
<div class="edit">
<h1>Editeur</h1>    
    <h3><a href='ajouter.php'>Créer une nouvelle pratique</a></h3>
    <h3>Modifier :</h3>
        <?php            
            $login=$_SESSION['userid'];
            $requete='SELECT * FROM article WHERE id_user='.$login;
                $index=$bdd->query($requete);
                foreach($index as $info){
                    echo "<h4><a href='modifier.php?id_article=".$info['id_article']."'>".$info['titre']." </a></h4>";
                }
        ?><br>
    <h3>Supprimer :</h3>
        <?php
            $login=$_SESSION['userid'];
            $requete='SELECT * FROM article WHERE id_user='.$login;
                $index=$bdd->query($requete);
                foreach($index as $info){
                    echo "<h4><a href='delete.php?id_article=".$info['id_article']."'>".$info['titre']." </a></h4>";
                }
                    echo "<h4 class='pwd'><a href='password.php'>Modifier son mots de passe</a><br>
                        <a href='profil.php'>Modifier son profil</a></h4>";
        ?>   
    </div>
<?php
    }else{
        header('location:index.php');
    }
?>
    
<?php
    require_once 'footer.php';
?> 