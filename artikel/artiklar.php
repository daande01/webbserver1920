<?php
session_start();
require ('dbconnect.php');
$_SESSION['user']=session_id();

echo $_SESSION['user'];
// $art=array(
//   array("lg 32",1000,"tv1.","bild.png"),
//   array("lg 42",2000,"tv2.","bild.png"),
//   array("lg 48",3000,"tv3","bild.png"),
//
// );

$db=new dbconnect();

//statement =dbconnectobjekt->instansvariabeln_pdo->metoden query som finns i pdo klassen
$stmt = $db->pdo->query("SELECT * FROM artiklar");
$stmt->execute();

$data = $stmt->fetchAll();

//print_r($data);









?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <?php

  echo"<div id=\"wrapper\">";

  foreach ($data as $row) {
echo <<<ARTIKEL

<div id="artikel">
<fieldset id="field">
<legend> {$row['namn']}   </legend>
<img src="bilder/{$row['bild']}" alt="{$row['bild']}" >
pris: {$row['pris']} kr
<form action="addtocart.php" method="get">

<input type="hidden" name="artid_pk" value="{$row['artid_pk']}">
<input type="hidden" name="sid" value="">


<select name="antal">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
<input type="submit" name="k" value="köp">
</form>



</fieldset>
</div>
ARTIKEL;
  }


  ?>
</div>
</body>
</html>
