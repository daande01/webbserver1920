<?php
session_start();
require('dbconnect.php');

$user=$_GET['username'];
$pass=$_GET['password'];

$dbcon= new dbconnect();
$sql="SELECT * FROM users where username= '".$user."' and password='".$pass."'";
echo $sql;

$stmt = $dbcon->pdo->query( $sql );
$stmt->execute();



if($stmt->fetch()){

        $_SESSION["usersession"]=$user;
        header('Location:inloggad.php');

}else{

header('Location:index.php?login=false');
}
// echo"<br>";
// echo password_hash("da", PASSWORD_DEFAULT);
// echo"<br>";
// echo password_hash("be", PASSWORD_DEFAULT);
//SELECT * FROM users where username= 'asa' or 1=1'' and password='test'





 ?>
