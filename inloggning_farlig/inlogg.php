<?php
session_start();

$user=$_GET['username'];
$pass=$_GET['password'];

//echo"password".$pass."username".$user;

if($user=="daniel" && $pass=="test"){

      $_SESSION["usersession"]=$user;
      header('Location:inloggad.php');


}else{

echo"ej inloggad";
header('Location:index.php?login=false');

}





 ?>
