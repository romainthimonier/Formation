<?php
    require_once 'header.php';
    require_once 'bdd.php';
    
    if (isset($_SESSION['admin'])) {
        if ($_SESSION['admin']);
?>
<h1>Créer </h1>
    <div class="modif">
        <form action='ajout.php' method='GET'>          
            <h3><label>Titre</label></h3>       
            <input type='text' name='titre' placeholder="titre"><br>
            <h3><label>Description</label></h3>
            <textarea name="description" cols="50" rows="10"></textarea><br>
            <h3><label>Date</label></h3>
            <input type='date' name='date' placeholder="Date"><br><br>
            <input type='submit' value="valider"></li>             
        </form><br>
    </div>

<?php
    }else if (isset($_SESSION['user'])) {
        if ($_SESSION['user']);
?>
<h1>Créer</h1>
    <div class="modif">
        <form action='ajoutuser.php' method='GET'>          
            <h3><label>Titre</label></h3>       
            <input type='text' name='titre' placeholder="titre"><br>
            <h3><label>Description</label></h3>
            <textarea name="description" cols="50" rows="10"></textarea><br>
            <h3><label>Date</label></h3>
            <input type='date' name='date' placeholder="Date"><br><br>
            <input type='submit' value="valider"></li>                
        </form><br>
    </div>  
<?php
    }else{
        header('location:index.php');
    }
    require_once 'footer.php';
?>