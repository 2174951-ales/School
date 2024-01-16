<?php
include 'db.php';
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST["naam"]) || empty($_POST["achternaam"]) || empty($_POST['geboortedatum']) || empty($_POST['email']) || empty($_POST['password'])) {
        echo 'empty';
    } else {
        try {
            $db->aanmelden($_POST['naam'], $_POST['achternaam'], $_POST['geboortedatum'], $_POST['email'], $_POST['password']);
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

    <title>Register</title>
</head>

<body>
    <div class="d-flex p-2 d-flex flex-column mb-3 align-items-center">
        <h2>Register</h2>
        <form method="POST">
            <div class="mb-3">
                <input type="text" name="naam" placeholder="Naam" required>
            </div>
            <div class="mb-3">
                <input type="text" name="achternaam" placeholder="Achternaam" required>
            </div>
            <div class="mb-3">
                <input type="Date" name="geboortedatum" required>
            </div>
            <div class="mb-3">
                <input type="Email" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="Password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>

    <div class="d-flex p-2 d-flex flex-column mb-3 align-items-center">
        <table  class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">naam</th>
                    <th scope="col">achternaam</th>
                    <th scope="col">geboortedatum</th>
                    <th scope="col">email</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <?php
                    $user = $db->SelectUser();
                    foreach ($user as $use) {
                    ?>
                        <th scope="row"> <?php echo $use['ID']; ?></th>
                        <td> <?php echo $use['naam']; ?> </td>
                        <td> <?php echo $use['achternaam']; ?> </td>
                        <td> <?php echo $use['geboortedatum']; ?> </td>
                        <td> <?php echo $use['email']; ?> </td>
                        <td><a class="btn btn-primary" href="#" role="button">delete</a></td>
                        <td><a class="btn btn-primary" href="#" role="button">edit</a></td>
                </tr><?php } ?>


            </tbody>




        </table>
    </div>
</body>

</html>