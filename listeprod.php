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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php 
        $type = $_GET["type"];
    ?>

<div class="head fixed-top">
        <div class="container">
            <div class="row">
                <div class="col" id="first">
                    <a href="expo.php">
                        <img src="images/logo.png" height=50>
                    </a>
                </div>
                <div class="col" id="second">
                    MUSEE DU VIN ET DES SPIRITUEUX
                </div>
                <div class="col" id="third">
                    <div class="dropdown">
                        <a class="btn sdropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/fr.png" height=50>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Français</a></li>
                            <li><a class="dropdown-item" href="#">English (soon)</a></li>
                            <li><a class="dropdown-item" href="#">Español (pronto)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="corpsacc">
        <img src="images/back22.png" width=100%>
        <div
            style="color:white;position: absolute;top:0;
            width:100%;top:30vh;font-weight: bolder;font-size: larger;text-align:center;">
            <?php if($type == "vin")
            {
                echo"NOTRE SELECTION DE VINS";
            }
            if($type == "spirit")
            {
                echo"NOTRE SELECTION DE SPIRITUEUX";
            }
            if($type == "exo")
            {
                echo"NOTRE SELECTION D'ALCOOLS EXOTIQUES";
            }
            ?></div>
    </div>
    <div class="corpsliste"><br><br><br><br>
        <div class="container">
            <div class="row">

                <?php
                    $id = mysqli_connect("127.0.0.1","root","","musee");
                    $res = mysqli_query($id, "select * from produit where cat='$type'");
                    while($ligne = mysqli_fetch_assoc($res))
                    {
                        $nom = $ligne["nom"];
                        $idp = $ligne["idp"];
                        $img = $ligne["p1"];
                    
                ?>
                <div class="col-sm-4">
                <br><br>
                    <div class="card" style="width: 18rem;">
                        <img src="alcool/<?php echo"$img"?>" class="card-img-top" height="200">
                        <!-- <img src="images/<?php //echo"$image1"?>" class="card-img-top" height="200"> -->
                        <div class="card-body">
                                <h5 class="card-title"><?php echo"$nom" ?></h5>
                                <p class="card-text"></p>
                                <a href="detail_produit.php?idp=<?php echo"$idp"?>" class="btn btn-primary">Découvrir</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <br><br><br><br>
    </div>
    <div class="foot">
    info légales
    </div>
</body>
</html>