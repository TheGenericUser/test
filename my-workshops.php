<?php

echo "The time is " . date("h:i:sa");
require('../private/php/autoload.php');
if(!isLogIn()){
    check_login($con);
}
if(!isLogIn()){
    header('Location: index');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/hide.css">
    <link rel="stylesheet" href="css/log-out-hide.css">
    <script src="js/user.js"></script>
    <script src="js/autotype.js"></script>
    <script defer src="js/animate.js"></script>
    <script src="js/hide.js"></script>
    <script src="js/search.js"></script>

    <title>My Workshops</title>
</head>
<body>
    <h1>Database.</h1>
    <p>Check if user even have purchased.</p>
    <p>case one: haven't. show "no workshops :("</p>
    <p>case two: yes. then show the workshop. simple table format(just throw in the workshop page until the period is expired). what if they click on it? shows them the workshop page. WIP.</p>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.7.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>