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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
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

    <div class="corpsacc">
        <img src="images/back2.png" width=100%>
        <div style="color:white;position: absolute;top:0;
            width:100%;top:30vh;font-weight: bolder;font-size: larger;text-align:center;">EXPOSITIONS</div>
    </div>
    <div class="corpsexpo">
        <br><br><br>
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
                            <p class="card-text">Les Exotiques sont des alcools au gout fruité nous rappelant généralement les iles et vacances</p>
                            <a href="listeprod.php?type=exo" class="btn btn-primary">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class='text-center text-white ' style='background-color: rgba(0, 0, 0, 0.904);color:white;'>
  <!-- Grid container -->
  <div class='container pt-4'>
    <!-- Section: Social media -->
    <section class='mb-4'>
      <!-- Facebook -->
      <a
        class='btn btn-link btn-floating btn-lg text-light m-1'
        href='#!'
        role='button'
        data-mdb-ripple-color='light'
        ><i class='bi bi-facebook'></i
      ></a>

      <!-- Twitter -->
      <a
        class='btn btn-link btn-floating btn-lg text-light m-1'
        href='#!'
        role='button'
        data-mdb-ripple-color='light'
        ><i class='bi bi-twitter'></i
      ></a>

      <!-- Google -->
      <a
        class='btn btn-link btn-floating btn-lg text-light m-1'
        href='#!'
        role='button'
        data-mdb-ripple-color='light'
        ><i class='bi bi-google'></i
      ></a>

      <!-- Instagram -->
      <a
        class='btn btn-link btn-floating btn-lg text-light m-1'
        href='#!'
        role='button'
        data-mdb-ripple-color='light'
        ><i class='bi bi-instagram'></i
      ></a>

      <!-- Linkedin -->
      <a
        class='btn btn-link btn-floating btn-lg text-light m-1'
        href='#!'
        role='button'
        data-mdb-ripple-color='light'
        ><i class='bi bi-linkedin'></i
      ></a>
      <!-- Github -->
      <a
        class='btn btn-link btn-floating btn-lg text-light m-1'
        href='#!'
        role='button'
        data-mdb-ripple-color='light'
        ><i class='bi bi-github'></i
      ></a>
    </section>
  
  
  
    <!-- Section: Social media -->
    <section class='text-center text-light'>
  
    <p>
    Le Musée des Vins et Spiritueux est une marque deposée par ECE Bachelor. <br>
    Tous droits réservés.
    </p>

        
    
    </section>
  </div>
  <!-- Grid container -->




  <!-- Copyright -->
  <div class='text-center text-light p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
    © 2022 M.V.S <br>Mentions légales :
    <a href="https://www.flaticon.com/fr/icones-gratuites/avatar" title="avatar icônes">Avatar icônes créées par Prosymbols Premium - Flaticon</a>
  </div>
  <!-- Copyright -->
</footer>
</body>

</html>