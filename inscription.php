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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <!-- position-absolute top-50 start-50 translate-middle -->
  <div class="fondinsc">
    <div class="row g-3  rounded shadow text-center " style="background-color: #b22222;">
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
        <label for="validationDefault02" class="form-label">Prénom</label>
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
        <label for="validationDefault03" class="form-label">Adresse Postale (Numéro, rue, ville)</label>
        <input type="text" name="adresse" class="form-control" id="" required>
      </div>
      <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Code postal</label>
        <input type="text" name="cp" class="form-control" id="" required>
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationDefault05" class="form-label">Mot de passe</label>
        <input type="password" name="mdp" class="form-control" id="" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault06" class="form-label">Confirmer votre mot de passe</label>
        <input type="password" name="mdpverif" class="form-control" id="" required>
      </div>


      <div>
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Choisir un avatar
        </button>
</div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <?php for ($i = 1; $i < 11; $i++){ ?>
                <div class="form-check">

                    <input class="form-check-input" type="radio" name="avatar" value="<?php echo"$i" ?>" id="flexRadioDefault<?php echo"$i" ?>" required>
                    <label class="form-check-label" for="flexRadioDefault<?php echo"$i" ?>">
                    <img src="avatar/<?php echo"$i" ?>.png" height="50">
                    </label>

                </div>
                <?php } ?>
              </div>
              <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">reset</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">valider</button>
              </div>
            </div>
          </div>
        </div>
      
      <div class="col-12 text-start ">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
          <label class="form-check-label" for="invalidCheck2">
            J'ai lu et j'accepte les conditions générales d'utilisation
          </label>
        </div>
      </div>

      <div class="col-12 p-2 m-2">
        <button class="btn btn-primary" type="submit" value='Log In' name="bouton">Log In</button>
      </div>
    </div>
  </div>
  </form>
  </div>
  <?php
  if (isset($_POST["bouton"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $adresse = $_POST["adresse"];
    $cp = $_POST["cp"];
    $mdp = $_POST["mdp"];
    $mdp2 = $_POST["mdpverif"];
    $i = $_POST["avatar"];

    if ($mdp == $mdp2) {
      $id = mysqli_connect("127.0.0.1", "root", "", "musee");
      $res = mysqli_query($id, "select mail from user where mail = '$mail'");
      $ligne = mysqli_fetch_assoc($res);
      if ($mail != $ligne["mail"]) {
        $res = mysqli_query($id, "insert into user value (null,'$nom','$prenom','$mail','$adresse','$cp','$mdp','$i.png',0,0)");
        echo "Inscription réussie ! <br>Chargement de la page d'inscription...";
        ?> <meta http-equiv="refresh" content="1;url=expo.php"/> <?php
        exit();
      } else echo "Cette adresse mail est déjà utilisée";
    } else echo "Les deux mots de passe sont différents";

    // if ($avatar == null) {
    //   $res = mysqli_query($id, "insert into user value (null,'$nom','$prenom','$mail','$adresse','$cp','$mdp','0.jpg',0,0)");
    //   echo "Inscription réussie ! <br>Chargement de la page d'inscription...";
    //   header('refresh:3;url=expo.php');
    //   exit();
    // }
  }
  ?>
  <div class="corpsacc">
    <div class="bg-image" style="background-image: url('images/back1.png');
            height: 50vh">
    </div>

</body>

</html>