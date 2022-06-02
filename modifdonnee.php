<?php
session_start();
$idu = $_SESSION["idu"];
    // $idu= 1;
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

<div class="fondinsc">
        <div class="row g-3 position-absolute top-50 start-50 translate-middle rounded shadow text-center" style="background-color: #b22222">
        <div class="h1">
                <h1>Votre compte</h1>
            </div>
            <div class=text-end>
            <form action="modif2.php" method="post">
      </div>
            
            <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control" id="" value="<?php echo "$nom" ?>" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Prénom</label>
        <input type="text" name="prenom" class="form-control" id="" value="<?php echo "$prenom" ?>" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefaultUsername" class="form-label">Adresse mail</label>
        <div class="input-group">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
          <input type="text" name="mail" class="form-control" id="" aria-describedby="inputGroupPrepend2" value="<?php echo "$mail" ?>" disabled required>
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationDefault03" class="form-label">Adresse Postale (Numéro, rue, ville)</label>
        <input type="text" name="adresse" class="form-control" id="" value="<?php echo "$adresse" ?>" required>
      </div>
      <div class="col-md-3">
        <label for="validationDefault04" class="form-label">Code postal</label>
        <input type="text" name="cp" class="form-control" id="" value="<?php echo "$cp" ?>" required>
        </select>
      </div>
      <div class="col-md-4">
        <label for="validationDefault05" class="form-label">Mot de passe</label>
        <input type="text" name="mdp" class="form-control" id="" value="<?php echo "$mdp" ?>" required>
      </div>
        
      <input type="button" value="Modifier" name="bouton">
        
        
        </div>
<div class="corpsacc">
    <div class="bg-image" style="background-image: url('images/back1.png');
    height: 100vh">
    </div>
</div>
</body>
</html>