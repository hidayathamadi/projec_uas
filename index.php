<?php
    require "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <H2>HALLO <?php echo $_SESSION['username']; ?></H2>
</body>
</html>