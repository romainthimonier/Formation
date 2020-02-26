<?php
require_once 'header.php';
require_once 'bdd.php';
if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin']);

?>
<h1>New Password</h1>
<div class="admin">
<form  action="pwd.php" method="get">
    <label>Ancien Password</label><br>
    <input type="password" name="pwd" id="pwd"><br><br>
    <label>New Password</label><br>
    <input type="password" name="newpwd" id="newpwd"><br><br>
    <input type="submit">
    
</form>
</div>
<?php
}
else if (isset($_SESSION['user'])) {
    if ($_SESSION['user']);

?>
<h1>New Password</h1>
<div class="edit">
<form  action="pwduser.php" method="get">
    <label>Ancien Password</label><br>
    <input type="password" name="pwd" id="pwd"><br><br>
    <label>New Password</label><br>
    <input type="password" name="newpwd" id="newpwd"><br><br>
    <input type="submit">
    
</form>
</div>
<?php
}
require_once 'footer.php';
?>



