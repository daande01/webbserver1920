<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
<?php
$artikelNamn="lg 32";
$pris=1999;
$beskrivning="mycket kompetent tv med full HD. En av de bästa i världen.";
$bild="bild.png";
echo"<id=\"dfdghhg\">"



echo <<<ARTIKEL

<div id="artikel">
<fieldset id="field">
<legend> {$artikelNamn}   </legend>

<img src="bilder/{$bild}" alt="lg 32" >
pris: {$pris} kr
</fieldset>
</div>
ARTIKEL;

 ?>

</body>
</html>
