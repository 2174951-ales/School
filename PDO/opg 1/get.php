
<form action="get.php" method="GET">
    Naam: <input type="text" name="name"><br>
    Achternaam: <input type="text" name="lastname"><br>
    Leeftijd: <input type="number" name="Age"><br>
    Adres: <input type="text" name="Adress"><br>
    Email: <input type="email" name="Email"><br>
    <input type="submit" value="Verzenden"><br>


</form>

<?php


$naam = $_GET["name"];
$achternaam = $_GET["lastname"];
$leeftijd = $_GET["Age"];
$adres = $_GET["Adress"];
$email = $_GET["Email"];


echo "Naam: ".$naam."<br>Achternaam: ".$achternaam."<br>Leeftijd:".$leeftijd."<br>Adres: ".$adres."<br>Email: ".$email;

?>