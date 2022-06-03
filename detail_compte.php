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
    <title>Document</title>
</head>

<body>
    <h1>Détail du Compte</h1><br>


    <?php
    // connexion au serveur mysql ou mariaDB
    $id = mysqli_connect("127.0.0.1:3307","root","","musee");
    $idu = $_GET["idu"];
    $req = "select * from user where idu=$idu";
    $resultat = mysqli_query($id, $req);
    $ligne = mysqli_fetch_assoc($resultat)
    ?>
    </table>
    <br><br>
    <?php
    $idu = $_GET["idu"];
    $req = "select * from user where idu=$idu";
    $resultat = mysqli_query($id, $req);
    $ligne = mysqli_fetch_assoc($resultat) ?>
    <table>
        <tr>
            <th>Numéro du compte</th>
            <?php echo "<td>" . $ligne["idu"] . "</td>" ?>
        </tr>
        <tr>
            <th>Nom</th>
            <?php echo "<td>" . $ligne["nom"] . "</td>" ?>
        </tr>
        <tr>
            <th>Prénom</th>
            <?php echo "<td>" . $ligne["prenom"] . "</td>" ?>
        </tr>
        <tr>
            <th>Mail</th>
            <?php echo "<td>" . $ligne["mail"] . "</td>" ?>
        </tr>
        <tr>
            <th>Adresse</th>
            <?php echo "<td>" . $ligne["adresse"] . "</td>" ?>
        </tr>
        <tr>
            <th>Code Postal</th>
            <?php echo "<td>" . $ligne["postal"] . "</td>" ?>
        </tr>
        <tr>
            <th>Niveau</th>
            <?php echo "<td>" . $ligne["niv"] . "</td>" ?>
        </tr>
        <tr>
            <th>Avatar</th>
            <?php echo "<td>" . $ligne["avatar"] . "</td>" ?>
        </tr>

    </table><br>

    <div class="valide_sup">
        <a href='ok.php?idu=<?php echo "" . $ligne["idu"] . "" ?>'><img src='images/ok.png' width='30'></a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href='sup.php?idu=<?php echo "" . $ligne["idu"] . "" ?>'><img src='images/sup.png' width='30'></a>
    </div>

    <div class="valide_sup">
        &nbsp&nbsp&nbsp&nbsp
        Valider
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        Supprimer
    </div>

</body>

</html>