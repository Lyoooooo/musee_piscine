<?php
    session_start();
    $idp = $_GET["idp"];
    $idu = $_SESSION["idu"];
    $id = mysqli_connect("127.0.0.1","root","","musee");
    //$id = mysqli_connect("127.0.0.1:3307","root","","musee");

    $res = mysqli_query($id, "select * from likes where idu=$idu and idp=$idp");
                $ligne = mysqli_fetch_assoc($res);
                if($ligne["bool"]==1){
                    $req = mysqli_query($id, "select likes from produit where idp=$idp");
                    $lig = mysqli_fetch_assoc($req);
                    $lik = $lig["likes"];
                    $lik = $lik -1;
                    $req = mysqli_query($id, "update produit set likes=$lik where idp=$idp");

                    $res = mysqli_query($id, "delete from likes where idu=$idu and idp=$idp");
                    header("refresh:0;url=detail_produit.php?idp=$idp");
                }else{
                    $req = mysqli_query($id, "select likes from produit where idp=$idp");
                    $lig = mysqli_fetch_assoc($req);
                    $lik = $lig["likes"];
                    $lik = $lik +1;
                    $req = mysqli_query($id, "update produit set likes=$lik where idp=$idp");

                    $res = mysqli_query($id, "insert into likes value(null,$idu,$idp,1)");
                    header("refresh:0;url=detail_produit.php?idp=$idp");
                }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>