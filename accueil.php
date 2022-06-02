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
            <div class="bg-image" style="background-image: url('images/back1.png');
            height: 100vh">
            </div>
            <form action="" method="post">
            <input type="submit" name="bouton" class="btn btn-outline-danger btn-lg position-absolute top-50 start-50 translate-middle" style="width:400px;height:150px;color: white;font-weight: bold;" value="ENTRER DANS LE MUSÉE"></input>
            </form>
            
    </div>
    


    <div class="foot">
    info légales
    </div>
    
    <?php 
        if(isset($_POST["bouton"]))
        {
            header('refresh:0;url=connexion.php');
        }
    ?>
</body>
</html>