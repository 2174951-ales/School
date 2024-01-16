<?php
$host = 'localhost:3307';
$db   = 'Winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}




if (isset($_POST['knop'])) {

    $sql = 'INSERT INTO producten (product_code, product_naam, prijs_per_stuk, omschrijving)
    VALUES (:product_code, :product_naam, :prijs_per_stuk, :omschrijving)';

    $stmt = $pdo->prepare($sql);

    $placeholders = [
        'product_code' => null,
        'product_naam' => $_POST['product_naam'],
        'prijs_per_stuk' => $_POST['prijs_per_stuk'],
        'omschrijving' => $_POST['omschrijving']
    ];
    $stmt->execute($placeholders);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="product_naam" placeholder="Product">
        <input type="number" step="any" name="prijs_per_stuk" placeholder="Prijs">
        <input type="text" name="omschrijving" placeholder="Omschrijving">
        <input type="submit" name="knop">


    </form>
</body>

</html>