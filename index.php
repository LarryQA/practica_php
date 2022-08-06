<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <title>Document</title>
</head>
<body>


<form class = "contenedor_central" action="#" method = "post">
<h1>Area de un cuadrado</h1>
<div>
<label for="base">Base</label>
<input type = "number" name = "base">
</div>
<div>
<label for="altura">Altura</label>
<input type = "number" name = "altura">
</div>

<input type = "submit" value = "Calcular">

<br>

<?php
include "functions.php";

if (isset($_POST['base']) && isset($_POST['altura'])){
    $b = $_POST['base'];
    $a = $_POST['altura'];

    $area = area($b, $a);
    echo "El area del cuadrado es: " . $area;
}


?>
</form>

</body>
</html>