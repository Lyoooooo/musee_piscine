<?php
session_start();
$idu=$_SESSION["idu"];
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
         $id = mysqli_connect("127.0.0.1","root","","musee");
         $res = mysqli_query($id, "select * from user where idu='$idu'");
         $ligne = mysqli_fetch_assoc($res);

    $idu = $ligne["idu"];
    $nom = $ligne["nom"];
    $prenom = $ligne["prenom"];
    $mail = $ligne ["mail"];
    $adresse = $ligne["adresse"];
    $cp = $ligne["postal"];
    $mdp = $ligne["mdp"];
    $avatar = $ligne["avatar"];
    ?>
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
                    MUSEE DES VINS ET SPIRITUEUX
                </div>
                <div class="col" id="third">
                    <div class="dropdown">
                        <a class="btn sdropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <button class="btn btn-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="avatar/<?php echo "$avatar" ?>" height="40"></button>

                            <div class="offcanvas offcanvas-end" style="background-color: #b22222;" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <h5 id="offcanvasRightLabel"></h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                                </div>
                                <div class="offcanvas-body text-center my-5">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    MON COMPTE
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <a href="modifdonnee.php">mon compte</a><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    CONTACT
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg> nommusee@gmail.com
                                                    </p> 
                                                    <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> 08.45.68.92.29 
            </p>
                                                    <p>
              <a href="#" class="text-decoration-none">
                
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
nom musee
              </a>
            </p>
            </button>
              <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    NOTER LE MUSEE
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="rating">
                                                        <div class="rating">
                                                            <a href="#5" title="Donner 5 étoiles">☆</a>
                                                            <a href="#4" title="Donner 4 étoiles">☆</a>
                                                            <a href="#3" title="Donner 3 étoiles">☆</a>
                                                            <a href="#2" title="Donner 2 étoiles">☆</a>
                                                            <a href="#1" title="Donner 1 étoile">☆</a>
                                                        </div><br>
                                                        <input type="button" class="btn btn-success" value="envoyer" name="valider">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-absolute bottom-0 end-0 p-3 m3">
                                    <h5><a href="deco.php">se déconnecter</a></H5>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
             <a class="btn btn-link position-absolute top-10 start-10" href="expo.php">retour</a>
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