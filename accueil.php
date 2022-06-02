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
                        <!-- <a class="btn sdropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="avatar/0.png" height=50>
                        </a> -->
                        <button class="btn btn-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="avatar/0.png" height=50></button>

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
                                                <a href="compte.php">mon compte</a><br>
                                                <a href="modif.php">modifier mes données</a><br>
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
                                                        <a href="#5" title="Donner 1 étoiles">☆</a>
                                                        <a href="#4" title="Donner 2 étoiles">☆</a>
                                                        <a href="#3" title="Donner 3 étoiles">☆</a>
                                                        <a href="#2" title="Donner 4 étoiles">☆</a>
                                                        <a href="#1" title="Donner 5 étoiles">☆</a>
                                                    </div><br>
                                                    <input type="button" class="btn btn-success" value="envoyer" name="valider">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 m3">
                                <h5><a href="deco.php">se déconnecté</a></H5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="corpsacc">
            <div class="bg-image" style="background-image: url('images/back1.png');
            height: 100vh">
            </div>
            <button type="button" class="btn btn-outline-danger btn-lg position-absolute top-50 start-50 translate-middle" style="width:400px;height:150px;color: white;font-weight: bold;">ENTRER DANS LE MUSÉE</button>
        </div>




        <div class="foot">
            info légales
        </div>

</body>

</html>