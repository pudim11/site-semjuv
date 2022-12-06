<?php
# https://localhost/TextSaudeDsts.php
require_once("connection.php");  

if(isset($_POST['TextSaudeDst'])){
    require_once("connection.php");

    $TituloDST=addslashes($_POST['tituloDsts']);
    $TextDSTS=addslashes($_POST['textoDsts']);

    $sql="INSERT INTO tb_saudedst VALUES ('$TituloDST','$TextDSTS', NULL)";
    mysqli_query ($con,$sql) or die($sql);   


}



/*
/*




if(isset($_POST['TextSaudeDst'])){
    require_once("connection.php");

    $TituloDST=addslashes($_POST['tituloDsts']);
    $TextDSTS=addslashes($_POST['textoDsts']);
    $query= mysqli_query($con);
    $ID_Text= ($con,$sql);

    $con="UPDATE tb_saudedst SET tituloDsts '$TituloDST',textoDsts='$TextDSTS',NULL,  WHERE ID_Text=$ID_Text";
    mysqli_query ($con,$sql) or die($sql);   






}



 if(isset($_GET["ID_Text"]) && !empty($_GET["ID_Text "])){

    include"connection.php";

    $query = "select * from tb_saudedst where ID_Text =".$_GET["ID_Text"];

    $resultado = mysqli_query($con, $sql);

    $dados = mysqli_fetch_array($resultado);

    $ID_Text = $dados["ID_Text"];
    $TituloDST = $dados["TituloDST"];
    $TextDSTS =  $dados["TextDSTS"];
 }





?>




$TituloDsts =addcslashes($_POST['tituloDsts']);
$TextDsts =addcslashes($_POST['textoDsts']);

$sql = "insert into tb_saudedsts(TituloDST,TextDSTS) VALUES
('$TituloDsts','$TextDsts');";
mysqli_query($con,$sql);
*/

