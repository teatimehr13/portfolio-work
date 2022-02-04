<?php
include_once "base.php";

if (isset($_SESSION['login'])) {
    to("back.php");
}

// if (!empty($_POST)) {
//     if ($_POST['acc'] == 'admin'  && $_POST['pw'] == '1234') {
//         header("location:" . 'back.php');
//     } else {
//         echo "<script>";
//         echo "alert('帳號或密碼錯誤')";
//         echo "</script>";
//     }
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="login-body">

    <div class="container">
        <div class="row form text-center d-block p-4">
            <h2 class="text-light">Login</h2>
            <form method="post" action="./api/login.php">
                <input type="text" class="form-control form-control-lg mt-4 mb-2" id="acc" name="acc" placeholder="Enter your account" required>
                <input type="password" class="form-control form-control-lg mb-4" id="pas" name="pw" placeholder="Enter your password" required>
                <button type="submit" class="btn btn-secondary btn-lg btn-block">GO</button>
                <button type="reset" class="btn btn-secondary btn-lg btn-block">reset</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>