<?php
    require_once 'header.php';
    require_once 'bdd.php';
?>    
    <h1>Vos bonnes pratiques</h1>        
        <?php
            $requete='SELECT * FROM article';
            $index=$bdd->query($requete);
            foreach($index as $info){
                echo "  <article class='index'>                 
                    <h2> ".$info['titre']." </h2>
                    <p>" .$info['description']." </p>
                    <p>" .$info['date']." </p>
                    <button><a href='article.php?id_article=".$info['id_article']."'>Lire</a></button>                                                         
                    </article>";
            }
        ?>
<?php
    require_once 'footer.php'
?>           