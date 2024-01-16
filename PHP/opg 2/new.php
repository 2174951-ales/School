<form action="new.php" method="GET">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" value="Submit"><br>
</form>

<?php

$name = $_GET["username"];
$password = $_GET["password"];

echo " username: " . $name . "<br>Password: " . $password;

// $variabele1 = 10;
// $variabele2 = 10;

// if($variabele1 == $variabele2) {
//     echo "De twee waarden zijn gelijk";
// }

// $variabele1 = 10;
// $variabele2 = 10;

// if($variabele1 != $variabele2) {
//     echo "De twee waarden zijn ongelijk";
// }

$variabele1 = 10;
$variabele2 = 10;

if ($variabele1 == $variabele2) {
    echo "<br>De twee waarden zijn gelijk";
} else if ($variabele1 != $variabele2) {
    echo "De twee waarden zijn ongelijk";
}

?>