

<?php



if (isset($_GET['login'])){

echo "du har angivit ett felaktigt användarnamn eller lösenord";

}

echo <<<INDEX


<form action="inlogg.php" method="get">

<input type="text"name="username">
<input type="password" name="password">
<input type="submit" name="knapp" value="send form">


</form>



INDEX;




 ?>
