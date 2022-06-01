<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssMusee.css">
    <title>Document</title>

</head>
<body>
    <h1>Liste des Alcools</h1>


    <div class = "div1">
        <br>
        <a href="detail_produit.php?idp=1&im=clos.jpg">
        <img src="images/clos" width = "135" id = "im1"><br>
        </a>
        Clos du temple
        <br>
    </div>

    <div class = "div2">
        <br>
        <a href="detail_produit.php?idp=2&im=don papa.jpg">
        <img src="images/don papa" width = "115" id = "im2"><br>
        </a>
        DON PAPA
        <br>
    </div>

</body>
</html>