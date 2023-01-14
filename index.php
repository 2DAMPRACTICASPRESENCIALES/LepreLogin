<?php
include './view/header.php';
include './controller/session.php';
?>

<!-- FORMULARIO DE LOGIN -->
    <form method="post" action="" name="signin-form">
        <div class="form-element">
            <label>Username</label>
            <input type="text" name="username" pattern="[a-zA-Z]+" required />
        </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="login" value="login">Log In</button>
    </form>

<?php
if(isset($_POST['username'])&&($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    checkSession($username,$password);
}
?>
