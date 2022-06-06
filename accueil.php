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
    <div class="head fixed-top">
        <div class="container">
            <div class="row">
                <div class="col" id="first">
                    <a href="accueil.php">
                        <img src="images/logo.png" height=50>
                    </a>
                    
                </div>
                <div class="col" id="second">
                    MUSEE DES VINS ET SPIRITUEUX
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
        <div class="bg-image" style="background-image: url('images/back1.png');
            height: 100vh">
        </div>
        <form action="" method="post">
            <input type="submit" name="bouton" class="btn btn-outline-danger btn-lg position-absolute top-50 start-50 translate-middle" style="width:400px;height:150px;color: white;font-weight: bold;" value="ENTRER DANS LE MUSÉE"></input>
        </form>

    </div>
    <?php
    if (isset($_POST["bouton"])) {
        header('refresh:0;url=connexion.php');
    }
    ?>



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