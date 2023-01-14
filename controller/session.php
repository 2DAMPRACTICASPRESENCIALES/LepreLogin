
<?php

require ('./model/user.php');
function checkSession($username, $password){

    $user = new user($username, $password);

//Validamos el login del formulario

    //Condicion usuario y password correspodan con los que tenemos
    if ($user->username == 'PracticasSIO' && $user->password == '12345') {
        echo '<div class="message_login"><div><p class="success">LOGIN CORRECTO pulse aqui</p></div></div></p>';
        session_start(); //Inicio de sesion
        //Asociamos sesion al nombre de usuario
        $_SESSION['name'] = 'PracticasSIO'; //Damos nombre de usuario como valor de una campo de session
        setcookie('PracticasSIO','',86400); //Establecemos una cokkie de 1 dia
    }else{
        session_write_close(); //Borramos sesiones anteriores
        echo '<div class="message_login"><div><p class="error">LOGIN INCORRECTO</p></div></div></p>';
    }
}


?>