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
        $idp=$_GET["idp"];
    ?>
<div class="head fixed-top">
        <div class="container">
            <div class="row">
                <div class="col" id="first">
                    <img src="images/logo.png" height=50>
                </div>
                <div class="col" id="second">
                    MUSEE TROP BIEN
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
    $id = mysqli_connect("127.0.0.1:3307","root","","musee");
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
                                <?php echo " <img src='images/$im1' class='d-block w-100' height='400'> ";?>
                            </div>
                            <div class="carousel-item">
                                <?php echo " <img src='images/$im2' class='d-block w-100' height='400'> ";?>
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <form action="" method="post">
        <input type="number" class="nb" id="quantite" placeholder="Quantité" name="nb" min="1">
        <input type="submit" value="Liker"  name="jaime" src='images/vide.png' width='30'><br><br>
    </form>


    <div class="container">
        <div class="row">
            <div class="col">




            <!-- Bonne chance à celui qui réussira les likes -->

            <div class= "like">
                <!-- <a href="like.php"><img src='images/vide.png' width='30'></a> -->
                <img src='images/vide.png' width='30' id="like">
                <?php
                if(isset($_POST["jaime"])){
                // if(isset("like")){
                    //$id = mysqli_connect("127.0.0.1","root","","musee");
                    $id = mysqli_connect("127.0.0.1:3307","root","","musee");
                    //$req = "select * from produit where idp= '$idp'";
                    $likes=$ligne["likes"];
                    //$requete = "INSERT INTO produit ('idp', 'nom', 'description', 'prix', 'degre', 'likes') VALUES ('$idp', '$nom', '$desc', '$prix', '$deg', '1')";
                    
                    $requete = "INSERT INTO produit (idp, nom, description, 'prix', 'degre', 'likes') value (null, '$nom', '$desc', '$prix', '$deg', $like)";
                    $resultat = mysqli_query($id, "insert into user value (null,'$nom','$desc','$prix','$deg','$like')");
                    //$resultat = mysqli_query($id, $requete);
                    header("refresh:0;url=detail_produit.php");
                }
                ?>


            </div>

            <div class="like">
                J'aime
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
            <div class="col">
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



</body>
</html>