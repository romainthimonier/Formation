<?php
    require_once 'header.php';
    require_once 'bdd.php';
?>
<?php
$id=$_GET['id_article'];
$query='SELECT * FROM article WHERE id_article='.$id;
$reponse=$bdd->query($query);
    foreach ($reponse as $value) {}
        echo "<div class='page'>
                <h2> ".$value['titre']."</h2>
                <p>".$value['description']."</p>
                <p>" .$value['date']."<p>
            </div>";
?>
<?php
    require_once 'footer.php'
?>           