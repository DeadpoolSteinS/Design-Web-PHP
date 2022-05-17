<?php
// https://novaldis.c120.me/tp6-prakdesweb/login.php
require 'conf.php';
require 'includes/Admin.class.php';

$admin = new Admin($db_host, $db_user, $db_pass, $db_name);
$admin->open();

$admin->checkCookie();
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["login"])) $message = $admin->login();
if (isset($_GET["message"])) $message = $_GET["message"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="d-flex align-items-center" style="min-height: 100vh;">
    <div class="container p-4" style="max-width: 500px; background-color: #eee;">
        <h1 class="text-center">Login Page</h1>
        <?php if (isset($message)) : ?>
            <div class="alert alert-<?= ($message[0] == "L") ? 'success' : 'danger' ?>" role="alert"><?= $message; ?></div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
                <p class="m-0">Don't have an account? <a href="registration.php">Click here</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>