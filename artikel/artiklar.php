<?php

$art=array(
      array("lg 32",1000,"tv1.","bild.png"),
      array("lg 42",2000,"tv2.","bild.png"),
      array("lg 48",3000,"tv3","bild.png"),

);



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

for ($row=0; $row <3 ; $row++) {
echo <<<ARTIKEL

<div id="artikel">
<fieldset id="field">
<legend> {$art[$row][2]}   </legend>
<img src="bilder/{$art[$row][3]}" alt="{$art[$row][0]}" >
pris: {$art[$row][1]} kr
</fieldset>
</div>
ARTIKEL;
}


 ?>
</div>
</body>
</html>
