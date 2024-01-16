<?php

include 'db.php';
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $db->DeleteUser($_POST['id']);
        echo "User deleted";
    } catch (Exception $e) {
        echo "Failed: " . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Delete</title>
</head>

<body>
    <div class="d-flex p-2 d-flex flex-column mb-3 align-items-center">
        <h2>Delete User</h2>
        <form method="POST">
            <div class="mb-3">
                <input type="text" name="id" placeholder="Id">
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>

</body>

</html>