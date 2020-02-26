<?php
    require_once 'header.php';  
?>
    <div class="connection">
    <article class="connecter">
        <h1>Se connecter </h1>
        <form action='conlog.php' method='GET'>          
            <label>Connexion</label><br>        
            <input type='text' name='login' placeholder="login"><br><br>
            <abel>Password</label><br>
            <input type='password' name='password' placeholder="password"><br><br>
            <input type='submit' value="valider"></li>                
        </form><br>
    </article><br>

    <article class="creation">
        <h1>Créer un compte</h1>
        <form action='conlogcrea.php' method='GET'>          
            <label>Login</label><br>        
            <input type='text' name='login' placeholder="login"><br><br>
            <label>Email</label><br>
            <input type="mail" name="mail" placeholder="email"><br><br>
            <abel>Password</label><br>
            <input type='password' name='password' placeholder="password"><br><br>
            <input type='submit' value="valider" >                
        </form><br>
    </article>
    </div>
<?php
    require_once 'footer.php';  
?>
