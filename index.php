<?php
    session_start();
    session_unset();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Index</title>
</head>
<body>

    <a href="./admin/">Admin Side</a>
    <a href="./student/">Student Side</a>
    <a href="./teacher/">Teacher Side</a>
    
</body>
</html>