<?php
$email_user = $_POST['email_user'];
$entrar = $_POST['entrar'];
$senha_user = md5($_POST['senha_user']);
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('mm_eventos');
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM mm_usuarios WHERE email_user =
    '$email_user' AND senha_user = '$senha_user'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"erro";
        die();
      }else{
        setcookie("email_user",$email_user);
        header("Location: ./eventos_mm/index.php");
      }
  }
?>