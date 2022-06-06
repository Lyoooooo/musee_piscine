<?php
session_start();
$idu = $_SESSION["idu"];
$idu = 1;
?>

<?php
    $note=$_GET["note"];
    $id = mysqli_connect("127.0.0.1","root","","musee");
    $res = mysqli_query($id, "select * from note where idu=$idu");
    $ligne = mysqli_fetch_assoc($res);
    if($ligne["note"]<=5 && $ligne["note"]>=1){
        $req = mysqli_query($id, "update note set note=$note where idu=$idu");
    }else{
        $res = mysqli_query($id, "insert into note value(null,$idu,$note)");
    }
    header('refresh:0;url=expo.php');
?>