<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssMusee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="fondinsc">
        <div class="opacity-25">
   <form class="row g-3 position-absolute top-50 start-50 translate-middle rounded shadow text-center" style="background-color: #b22222;">
<div class="h1">
   <H1>Inscription</H1>
</div>
    <hr><br>
<div class=text-end>
    <form action="" method="post">
     <a href="connexion.php" class="button">SE CONNECTER</a> <br>
</div>
     
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nom</label>
    <input type="text" name="nom" class="form-control" id="" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Prenom</label>
    <input type="text" name="prenom" class="form-control" id=""  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Adresse mail</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" name="mail"class="form-control" id=""  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Adresse Postal (Numéro,rue,ville)</label>
    <input type="text" name="adresse" class="form-control" id="" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Code postal</label>
    <input type="text" name="cp" class="form-control" id=""  required>
    </select>
  </div>
  <div class="col-md-4">
    <label for="validationDefault05" class="form-label">Mots de passe</label>
    <input type="password" name="mdp" class="form-control" id=""  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault06" class="form-label">Confirmer votre mots de passe</label>
    <input type="password" name="mdpverif" class="form-control" id=""  required>
  </div>
  <div class="col-12 text-start ">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        J'ai lus et j'accepte les conditions générales d'utilisation
      </label>
    </div>
  </div>
  <div class="col-12 p-2 m-2">
    <button class="btn btn-primary" type="submit" value='Log In'name="bouton">Log In</button>
  </div>
</div>
</div>
</form>
</form>
 <?php
    if(isset($_POST["bouton"]))
    {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $adresse = $_POST["adresse"];
        $cp = $_POST["cp"];
        $mdp = $_POST["mdp"];
        $mdp2 = $_POST["mdpverif"];

        if($mdp == $mdp2)
        {
            $id = mysqli_connect("127.0.0.1","root","","musee"); 
            $res = mysqli_query($id, "select mail from user where mail = '$mail'");
            $ligne = mysqli_fetch_assoc($res);
            if($mail != $ligne["mail"])
            {
                $res = mysqli_query($id, "insert into user value (null,'$nom','$prenom','$mail','$adresse','$cp','$mdp',0,0,0)");
                echo"Inscription réussie ! <br>Chargement de la page d'inscription...";
                header('refresh:3;url=expo.php');
                exit();
            }else echo "Cette adresse mail est déjà utilisée";
        }else echo "Les deux mots de passe sont différents";
    }
    ?>
    <div class="corpsacc">
        <div class="bg-image" 
            style="background-image: url('images/back1.png');
            height: 100vh">
        </div> 
    </div>
    </body>
</html>