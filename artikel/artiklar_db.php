<?php
error_reporting(E_ALL);
require('dbconnect.php');
$dbcon= new dbconnect();
$stmt = $dbcon->pdo->query('SELECT * FROM artiklar');
$stmt->execute();


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
//print_r($row = $stmt->fetchAll());

while ($row = $stmt->fetch()){


echo <<<ARTIKEL

<div id="artikel">
<fieldset id="field">
<legend> {$row['namn']}   </legend>
<img src="bilder/{$row['bild']}" alt="{$row['bild']}" >
pris: {$row['pris']} kr
</fieldset>
</div>
ARTIKEL;
  }


  ?>
</div>
</body>
</html>
