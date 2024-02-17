<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATOS TRANFERIDOS DEL FORMULARIO</h1>
    <?php
    //viene de form login.php
    echo "el usuario ingresado es ...: ";
    echo "<br>";
    echo $_POST['username'];
    ?>
</body>
</html>
