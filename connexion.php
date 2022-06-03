<?php
session_start();
$id = mysqli_connect("127.0.0.1", "root", "", "musee");
if (isset($_POST["bouton"])) {
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
    $req = "select * from user where mail='$mail' and mdp='$mdp' ";
    $resultat = mysqli_query($id, $req);
    $ligne = mysqli_fetch_assoc($resultat);
    $idu = $ligne["idu"];
    $nom = $ligne["nom"];
    $prenom = $ligne["prenom"];
    $nv = $ligne["nv"];

    if (mysqli_num_rows($resultat) > 0) {
        if($ligne["valide"]==0)
        {
            ?>
                <div style="background-color:firebrick;text-align:center;color:white;">
                    Votre compte doit être validé par un administrateur pour pouvoir se connecter
                </div>
            <?php 
        }else{
            $_SESSION["idu"] = $idu;
            $_SESSION["nom"] = $nom;
            $_SESSION["prenom"] = $prenom;
            $_SESSION["nv"] = $nv;

            if($nv == 0)
            {
                header("location:expo.php");
            }else{
                header("location:admin.php");
            }
            
        }
    } else {
        $erreur = "Mail ou mot de passe incorrect !";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="cssMusee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <div class="fondinsc">
        <div class="row g-3 position-absolute top-50 start-50 translate-middle rounded shadow text-center" style="background-color: #b22222">
            <div class="h1">
                <h1>Formulaire de connexion</h1>
            </div>
            <hr>
            <div class="container">
                <form action="" method="post">
                    <input type="email" name="mail" placeholder="Entrez votre mail:" required>
                    <input type="password" name="mdp" placeholder="Entrez votre mot de passe:" required> <br><br>
                    <input type="reset" value="ANNULER">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" value="ENVOYER" name="bouton"> <br> <br>
                </form>
                <div class='text-start'>
                    Pas de compte?<a href="inscription.php" class="btn btn-primary p-2 m-2">S'INSCRIRE</a>
                </div>
            </div>
        </div>

        <div class="corpsacc">
            <div class="bg-image" style="background-image: url('images/back1.png');
            height: 100vh">
            </div>
        </div>
</body>

</html>