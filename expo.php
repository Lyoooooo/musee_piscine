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
    </div>

    <div class="corpsacc">
        <img src="images/back2.png" width=100%>
        <div
            style="color:white;position: absolute;top:0;
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