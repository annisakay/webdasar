<?php
session_start();
if (!isset($_SESSION['username'])) {
    
    header("Location: login.php");
    exit();
}


if (!isset($_SESSION['usm_count'])) {
    $_SESSION['usm_count'] = 1;
} else {
    $_SESSION['usm_count'] += 1;
}
?>
<html>
    <head>
        <title>::Login Page::</title>
        <style type="text/css">
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
        </style>
    </head>
    <body>
        <h1><?php echo "Selamat datang " . $_SESSION['username'] . " Ke-" . $_SESSION['usm_count']; ?></h1>
    </body>
</html>