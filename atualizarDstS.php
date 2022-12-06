<?php 
include("connection.php");

if(isset($_POST['atualizarDSTS'])){
    include("connection.php");


    $TituloDST=addslashes($_POST['tituloDsts']);
    $TextDSTS=addslashes($_POST['textoDsts']);
    
    $sql="UPDATE `tb_saudedst` SET TituloDST = '$TituloDST', TextDSTS = '$TextDSTS', ID_Text = NULL, WHERE ID_Text";
    mysqli_query ($con,$sql) or die ($sql); 


}

echo $TituloDST['TituloDST'];

?>