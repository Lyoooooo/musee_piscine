<?php
$idu = $_GET["idu"];
$id = mysqli_connect("127.0.0.1", "root", "", "musee");
$req = "select * from user where idu=$idu";
$resultat = mysqli_query($id, $req);
$ligne = mysqli_fetch_assoc($resultat);
$mail = $_POST["mail"];



$id = mysqli_connect("127.0.0.1", "root", "", "musee");
if (isset($_POST["bouton"])) {

    $req = "select * from user where mail='$mail'";
    $resultat = mysqli_query($id, $req);
    $ligne = mysqli_fetch_assoc($resultat);
    $idu = $ligne["idu"];
    $nom = $ligne["nom"];
    $prenom = $ligne["prenom"];
    $adress = $ligne["adresse"];
    $cp = $ligne["postal"];
    $mdp = $ligne["mdp"];
    $avatar = $ligne["avatar"];


    if (mysqli_num_rows($resultat) > 0) {
        $_SESSION["idu"] = $idu;
        $_SESSION["nom"] = $nom;
        $_SESSION["prenom"] = $prenom;
        $_SESSION["nv"] = $nv;
        $_SESSION["adresse"] = $adresse;
        $_SESSION["mail"] = $mail;
        $_SESSION["postal"] = $postal;
        $_SESSION["mdp"] = $mdp;
        $_SESSION["avatar"] = $avatar;



        header("location:expo.php");
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
    <title>Document</title>
    <link rel="stylesheet" href="cssMusee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control" id="" required>
    </div>
    <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Prenom</label>
        <input type="text" name="prenom" class="form-control" id="" required>
    </div>
    <div class="col-md-4">
        <label for="validationDefaultUsername" class="form-label">Adresse mail</label>
        <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
            <input type="text" name="mail" class="form-control" id="" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationDefault03" class="form-label">Adresse Postal (Numéro,rue,ville)</label>
        <input type="text" name="adresse" class="form-control" id="" required>
    </div>
    <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Code postal</label>
        <input type="text" name="cp" class="form-control" id="" required>
        </select>
    </div>
    <div class="col-md-4">
        <label for="validationDefault05" class="form-label">Mots de passe</label>
        <input type="password" name="mdp" class="form-control" id="" required>
    </div>





    <div class="corpsacc">
        <div class="bg-image" style="background-image: url('images/back1.png');
            height: 100vh">
        </div>
</body>

</html>