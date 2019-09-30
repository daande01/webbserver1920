<?php
session_start();


$antal_clean= filter_input(INPUT_GET, 'antal', FILTER_SANITIZE_STRING);
$artid_pk_clean= filter_input(INPUT_GET, 'artid_pk', FILTER_SANITIZE_STRING);


$db=new dbconnect();

//statement =dbconnectobjekt->instansvariabeln_pdo->metoden query som finns i pdo klassen

//artid_fk  , userid_fk , antal, cartid_pk

$stmt = $pdo->prepare("insert into cart(artid_fk,userid_fk,antal)values(?,?,?)");
$stmt->bindParam(1, $artid_pk_clean);
$stmt->bindParam(2, $_SESSION['user']);
$stmt->bindParam(3,$antal_clean );

$stmt->execute();
$stmt = null;




  ?>
