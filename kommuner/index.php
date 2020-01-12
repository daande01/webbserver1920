<?php
error_reporting(E_ALL);
include 'dbconnect.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

$pdo=anslutdb();
$sql="select * from geo_counties";
$stmt = $pdo->query($sql);
$stmt->execute();

echo"<select id=\"county\">";
while ($row = $stmt->fetch()) {

  echo"<option value=\"".$row['countyid']."\">".$row['name']."</option>\n";
}
echo"</select>";

 ?>
<div id="text"> </div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$( "select" ).change(function() {
  console.log("hej");

  $.get( "getkom.php", {countyid: $( "#county" ).val() }, function( data ) {

$( "#text" ).html(data);


    var size=data.length;
    var newtext="";
    console.log(size);
    for (i = 0; i < size; i++) {

      newtext=newtext+""+ data[i].namn+ "<br>" ;
    }






},"json");


  });

</script>



  </body>
</html>
