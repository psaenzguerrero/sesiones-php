<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_SESSION["var1"])) { echo $_SESSION["var1"]."<br>"; }
        if (isset($_SESSION["var2"])) { echo $_SESSION["var2"] ; }
    ?>
</body>
</html>