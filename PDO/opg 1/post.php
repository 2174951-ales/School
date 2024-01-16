<form action="post.php" method="POST">
    Naam: <input type="text" name="name"><br>
    Achternaam: <input type="text" name="lastname"><br>
    Leeftijd: <input type="number" name="Age"><br>
    Adres: <input type="text" name="Adress"><br>
    Email: <input type="email" name="Email"><br>
    <input type="submit" value="Verzenden"><br>


</form>

<?php

$naam = $_POST["name"];
$achternaam = $_POST["lastname"];
$leeftijd = $_POST["Age"];
$adres = $_POST["Adress"];
$email = $_POST["Email"];


echo "Naam: ".$naam."<br>Achternaam: ".$achternaam."<br>Leeftijd:".$leeftijd."<br>Adres: ".$adres."<br>Email: ".$email;

?>