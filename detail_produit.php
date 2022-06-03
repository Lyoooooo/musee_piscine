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
<body style="background-color:hsla(343, 92%, 19%, 0.989);color:white">
    <?php
        $idp=$_GET["idp"];
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
    </div><br><br><br><br>
    
    <?php
    //$id = mysqli_connect("127.0.0.1","root","","musee");
    $id = mysqli_connect("127.0.0.1","root","","musee");
    $idu = $_SESSION["idu"];
    $idp=$_GET["idp"];
    $req = "select * from produit where idp= '$idp'";
    $res = mysqli_query($id, $req); 
    $ligne = mysqli_fetch_assoc($res);
    $nom = $ligne["nom"];
    $im1 = $ligne["p1"];
    $im2 = $ligne["p2"];
    $desc = $ligne["description"];
    $deg = $ligne["degre"];

    $prix = $ligne["prix"];
    ?>

    <div class = "nom">
        <?php echo "$nom";?>
    </div><br><br>
    <div class="corpsacc">
        <div class="bg-image" style="background-image: url('images/back1.png');
            height: 100vh"><br><br><br>
            <div class="container">
        <div class="row">
            <div class="col">
                <div class="image_carou">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <?php echo " <img src='alcool/$im1' class='d-block w-100' height='400'> ";?>
                            </div>
                            <div class="carousel-item">
                                <?php echo " <img src='alcool/$im2' class='d-block w-100' height='400'> ";?>
                                <!-- <img src="images/don papa" class="d-block w-100" alt="..." height="400"> -->
                            </div>
                            <!-- <div class="carousel-item">
                                <?php //echo " <img src='images/$im' class='d-block w-100' height='400'> ";?>
                                <img src="images/clos" class="d-block w-100" alt="..." height="400">
                            </div> -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="description_produit">
                    <?php echo "$desc";?>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <div class="container" style="background-color:hsla(343, 92%, 19%, 0.989);border-radius: 10px;text-align:center;">
        <div class="row">
            <div class="col">
            <?php
                $res = mysqli_query($id, "select * from likes where idu=$idu and idp=$idp");
                $ligne = mysqli_fetch_assoc($res);
                if($ligne["bool"]==1){?>
                    <form action="" method="post">
                <a class="submit" href="liked.php?idp=<?php echo"$idp"?>" name="bouton" role="button">
                <img src='images/plein.png' width='30' id="like">
                </a>
            </form>
                <?php }else{
            ?>
            <form action="" method="post">
                <a class="submit" href="liked.php?idp=<?php echo"$idp"?>" name="bouton" role="button">
                <img src='images/vide.png' width='30' id="like">
                </a>
            </form>
            <?php } ?>
            
            <div class="like">
                    <?php  $req = mysqli_query($id, "select likes from produit where idp=$idp");
                    $lig = mysqli_fetch_assoc($req);
                    $lik = $lig["likes"];
                    echo"$lik"?>
            </div>

            </div>
            <div class="col">
                <div class = "degre">
                    <?php echo "Degré: $deg %";?>
                </div><br>
            </div>
            <div class="col">
                <div class = "prix">
                    <?php echo "Prix: $prix €";?>
                </div>
            </div>
        </div>
    </div>













    <!-- <div class="description_produit">
        alcool
    </div> -->






    <!-- LIKE -->

    <div class= "like">
        <?php
        //if (isset("<img src='images/vide.png' width='30'>")){

        //}
        ?>
    <!-- <a href='like.php?idu=<?php //echo"".$ligne["idu"].""?>'><img src='images/vide.png' width='30'></a> -->
    <!-- <a href='sup.php?idu=<?php //echo"".$ligne["idu"].""?>'><img src='images/sup.png' width='30'></a> -->
    </div>
        </div>
        
        
    </div>


    



</body>
</html>