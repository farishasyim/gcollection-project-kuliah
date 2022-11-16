<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCollection</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php
$page;
if (!isset($_GET['page'])) {
    $_GET['page'] = "home";
}
$page = $_GET['page'];
?>

<body>
    <?php
    if ($page != "login") {
        include("./components/navbar.php");
    }

    if ($page == "home") {
        include('views/dashboard.php');
    } else if ($page == "login") {
        include('views/login.php');
    } else if ($page == "products") {
        include('views/products.php');
    } else if ($page == "contact") {
        include('views/contact.php');
    } else {
    }

    if ($page != "login") {
        include("./components/footer.php");
    }
    ?>
</body>

</html>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>