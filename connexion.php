<?php
    session_start();
    $id= mysqli_connect("127.0.0.1","root","","musee");
    if(isset($_POST["bouton"]))
    {
        $mail= $_POST["mail"];
        $mdp=$_POST["mdp"];
        $req= "select * from user where mail='$mail' and mdp='$mdp' ";
        $resultat= mysqli_query($id,$req);
        $ligne=mysqli_fetch_assoc($resultat);
        $idu=$ligne["idu"];
        $nom=$ligne["nom"];
        $prenom=$ligne["prenom"];
        $nv=$ligne["nv"];

        if(mysqli_num_rows($resultat)>0)
        {
            $_SESSION["idu"]=$idu;
            $_SESSION["nom"]=$nom;
            $_SESSION["prenom"]=$prenom;
            $_SESSION["nv"]=$nv;


                header("location:expo.php");
        }
        else
        {
            $erreur="Mail ou mot de passe incorrect !";
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
</head>
<body>
<div class="fondinsc">
        <div class="opacity-25">
   <form class="row g-3 position-absolute top-50 start-50 translate-middle rounded shadow text-center" style="background-color: #b22222">
<div class="h1">
   <h1>Formulaire de connexion</h1>
</div>
    <hr>
    <div class="container">
        <form action="" method="post">
            <input type="email" name="mail" placeholder="Entrez votre mail:"required>
            <input type="password" name="mdp" placeholder="Entrez votre mot de passe:"required> <br><br>
            <input type="reset" value="ANNULER">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="ENVOYER" name="bouton"> <br> <br>
        </form>
        <div class='text-start'>
        Pas de compte?<a href="inscription.php" class="btn btn-primary p-2 m-2">S'INSCRIRE</a>
    </div>
    </div>



    <div class="corpsacc">
        <div class="bg-image" 
            style="background-image: url('images/back1.png');
            height: 100vh">
        </div> 
    </div>
</body>
</html>