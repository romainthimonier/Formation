<?php
    require_once 'header.php';
    require_once 'bdd.php';
    
    if (isset($_SESSION['admin'])) {
        if ($_SESSION['admin']);

$id=$_GET['id_article'];
$query='SELECT titre FROM article WHERE id_article='.$id;
$reponse=$bdd->query($query);
foreach ($reponse as $value) {}
?>
<h1>Modifier <?php echo $value['titre'];?></h1>
    <div class="modif">
        <form action='modif.php' method='GET'>          
            <h3><label>Titre</label></h3>       
            <input type='text' name='titre' placeholder="titre"><br>
            <h3><label>Description</label></h3>
            <textarea name="description" cols="50" rows="10"></textarea><br>
            <h3><label>Date</label></h3>
            <input type='date' name='date' placeholder="Date"><br><br>
            <input type='submit' value="valider"></li>
            <input type='hidden' name='id_article' value='<?php echo $_GET['id_article'];?>'>               
        </form><br>
    </div>

<?php
    }else if (isset($_SESSION['user'])) {
        if ($_SESSION['user']);
$id=$_GET['id_article'];
$query='SELECT titre FROM article WHERE id_article='.$id;
$reponse=$bdd->query($query);
foreach ($reponse as $value) {}
?>
<h1>Modifier <?php echo $value['titre'];?></h1>
    <div class="modif">
        <form action='modif.php' method='GET'>          
            <h3><label>Titre</label></h3>       
            <input type='text' name='titre' placeholder="titre"><br>
            <h3><label>Description</label></h3>
            <textarea name="description" cols="50" rows="10"></textarea><br>
            <h3><label>Date</label></h3>
            <input type='date' name='date' placeholder="Date"><br><br>
            <input type='submit' value="valider"></li>
            <input type='hidden' name='id_article' value='<?php echo $_GET['id_article'];?>'>                
        </form><br>
    </div>  
<?php
    }else{
        header('location:index.php');
    }
    require_once 'footer.php';
?>