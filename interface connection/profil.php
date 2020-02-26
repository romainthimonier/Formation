<?php
require_once 'header.php';
require_once 'bdd.php';

if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin']);

?>
<h1>New Profil</h1>
<div class="admin">
    <form action='prof.php' method='GET'>          
        <label>Login</label><br>
        <input type='text' name='login' placeholder="login"><br>        
        <input type='text' name='newlogin' placeholder="newlogin"><br><br>
        <label>Email</label><br>
        <input type="mail" name="mail" placeholder="email"><br>
        <input type="mail" name="newmail" placeholder="new email"><br><br>
        <abel>Password</label><br>
        <input type='password' name='password' placeholder="password"><br>
        <input type='password' name='newpwd' placeholder="new password"><br><br>
        <input type='submit' value="valider" >                
    </form><br>
</div>
<?php
}
else if (isset($_SESSION['user'])) {
    if ($_SESSION['user']);

?>
<h1>New Profil</h1>
<div class="edit">
    <form action='profuser.php' method='get'>          
    <label>Login</label><br>       
        <input type='text' name='newlogin' id='newlogin' placeholder="newlogin"><br><br>
        <label>Email</label><br>
        <input type="mail" name="newmail" id='newmail' placeholder="new email"><br><br>
        <abel>Password</label><br>
        <input type='password' name='newpwd' id='newpwd' placeholder="new password"><br><br>
        <input type='submit' value="valider" >                  
    </form><br>
</div>
<?php
}
require_once 'footer.php';
?>