<?php 
session_start();

$user =  $_REQUEST['user'];
$pass =  $_REQUEST['pass'];

require("modelo/m_usuario.php");

$usuario = ValidarUsuario($user,$pass);

//Si exite este usuario
if($usuario!=NULL)
{
    foreach ($usuario as $key => $value) 
    {
        $id_usuario = $value['id_usuario'];
        $nom_usuario = $value['nom_usuario'];
        $ape_usuario = $value['ape_usuario'];
        $dni_usuario = $value['dni_usuario'];
        $cel_usuario = $value['cel_usuario'];
        $email_usuario = $value['email_usuario'];
        $dir_usuario = $value['dir_usuario'];
        $user_usuario = $value['user_usuario'];
        $pass_usuario = $value['pass_usuario'];
        $est_usuario = $value['est_usuario'];
    }

    //Crear variables de session
    $_SESSION['autentificado'] = TRUE;
    $_SESSION['id_session'] = $id_usuario;
    $_SESSION['nom_session'] = $nom_usuario." ".$ape_usuario;

    header('location: cliente_listar.php');
}
else
{
    header('location: index.php');
}
?>