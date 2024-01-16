<?php       

include 'db.php';
$db = new Database();



    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
        $db->InsertUser($_POST['email'], $_POST['password']);
        echo "Data inserted";
        } catch (Exception $e) {
            echo "Failed: " .$e->getMessage(); 
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="knop">


    
    </form>
</body>
</html>