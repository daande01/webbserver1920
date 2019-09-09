

<?php

$username_dirty=$_GET['username'];


$username_clean= filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING);




echo "<br><br>". htmlspecialchars($username_dirty, ENT_QUOTES)."<br><br>";

for ($i=0; $i <10 ; $i++) {
  echo "<h1>". htmlspecialchars($username_clean, ENT_QUOTES)."<h1>";

}

 ?>
