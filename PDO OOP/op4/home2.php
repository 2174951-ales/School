<?php

include 'db.php';
$db = new Database();



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        echo 'empty';
    } else {
        try {
            $db->InsertUser($_POST['email'], $_POST['password']);
            echo "Data inserted";
        } catch (Exception $e) {
            echo "Failed: " . $e->getMessage();
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Insert Data</title>
</head>

<body>
    <form method="POST">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="knop">

        <table border="8">
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <tr>
                <?php
                $user = $db->selectIf();
                foreach ($user as $use) {
                ?>
                    <td><?php echo $use['ID']; ?></td>
                    <td><?php echo $use['email']; ?></td>
                    <td><?php echo $use['password']; ?></td>
                    <td><a class="btn btn-primary" href="delete.php" role="button">delete</a></td>
                    <td><a class="btn btn-primary" href="update.php" role="button">edit</a></td>
            </tr><?php } ?>


        </table>

    </form>
</body>

</html>

