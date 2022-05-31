coucou

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssMusee.css">
    <title>Document</title>
</head>
<body>
<H1>Inscription</H1>
    <hr><br>

    <form action="" method="post">
        <input type="text" name="nom" id="" placeholder="Nom" required><br>
        <input type="text" name="prenom" id="" placeholder="Prénom" required><br>
        <input type="text" name="mail" id="" placeholder="Mail" required><br>
        <input type="text" name="adresse" id="" placeholder="Adresse" required><br>
        <input type="text" name="cp" id="" placeholder="Code postal" required><br>
        <input type="password" name="mdp" id="" placeholder="Mot de passe" required><br>
        <input type="password" name="mdpverif" id="" placeholder="Confirmation mot de passe" required><br>
        <input type="submit" value="Log In" name="bouton">
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
                $res = mysqli_query($id, "insert into user value (null,'$nom','$prenom','$mail','$adresse','$cp','$mdp','0',0)");
                echo"Inscription réussie ! <br>Chargement de la page d'inscription...";
                header('refresh:3;url=loginQCM.php');
                exit();
            }else echo "Cette adresse mail est déjà utilisée";
        }else echo "Les deux mots de passe sont différents";
        
    }
    ?>
</body>
</html>