<?php
    $idu = $_GET["idu"];
    //$idu= 1;
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
<body>
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
                            <button class="btn btn-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="<?php $avatar ?>" height=50></button>

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
                                                    @: tel: fb:
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
                                <div class="p-3 m3">
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

    <div class="corpsacc">
        <img src="images/back2.png" width=100%>
        <div style="color:white;position: absolute;top:0;
            width:100%;top:30vh;font-weight: bolder;font-size: larger;text-align:center;">EXPOSITIONS</div>
    </div>
    <div class="corpsexpo">
        <br><br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="images/vin.jpg" class="card-img-top" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Vins</h5>
                            <p class="card-text">Vous pensiez tout savoir sur le vin ? <br> Voici une selection non-exhaustive de nos plus beaux produits pour vous éclaircir sur les mystères de l’or rouge !</p>
                            <a href="listeprod.php?type=vin" class="btn btn-primary">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="images/spirit.jpg" class="card-img-top" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Spiritueux</h5>
                            <p class="card-text">Les spiritueux sont bien souvent connus pour leur goût, leur usage voire leur élaboration. Mais qu’en est-il de leur histoire ? Découvrez notre sélection.</p>
                            <a href="listeprod.php?type=spirit" class="btn btn-primary">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="images/exo.jpg" class="card-img-top" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Exotiques</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="listeprod.php?type=exo" class="btn btn-primary">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot">
        info légales
    </div>
</body>

</html>