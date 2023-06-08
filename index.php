<?php
$arr_character = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#%^&*()[]';
$password_lenght = isset($_GET['password']) ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary">Strong Password Generator</h1>
        <h2 class="text-center text-secondary">Genera una password sicura</h2>

        <form class="row g-3 justify-content-center align-items-center" method="get">
            <div class="col-auto">
                <div>Lunghezza password:</div>
            </div>
            <div class="col-auto">
                <input type="number" class="form-control" id="password" name="password">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Invia</button>
            </div>
            <div class="col-auto">
                <a href="/php-strong-password-generator" type="reset" class="btn btn-secondary mb-3">Annulla</a>
            </div>
        </form>
    </div>
</body>

</html>