<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "functions.php";
        saveResult($_POST["name"], $_POST["tries"]);

    ?>
    <h1>SAVED!</h1>
</body>
</html>