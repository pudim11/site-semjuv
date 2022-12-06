<?php 
include("connection.php");


if(isset($_POST['atualizarDSTS'])){
    require_once("connection.php");


    $TituloDST=addslashes($_POST['tituloDsts']);
    $TextDSTS=addslashes($_POST['textoDsts']);
    $TituloDepre=addslashes($_POST['TituloDepre']);
    $TextDepre=addslashes($_POST['textDepre']);
    $TituloDoenca=addslashes($_POST['tituloDoenca']);
    $TextDoenca=addslashes($_POST['textDoenca']);




    
    $sql= "UPDATE tb_saudedst SET TituloDST = '$TituloDST',TextDSTS = '$TextDSTS', TituloDepre = '$TituloDepre',TextDepre = '$TextDepre',TituloDoenca = '$TituloDoenca',TextDoenca = '$TextDoenca' WHERE ID_Text=14";
    
    mysqli_query ($con,$sql) or die ($sql); 

}
/*


$TituloDST=addslashes($_POST['tituloDsts']);
$TextDSTS=addslashes($_POST['textoDsts']);

    
$sql="UPDATE `tb_saudedst` SET TituloDST = '$TituloDST', TextDSTS = '$TextDSTS', ID_Text = NULL, WHERE ID_Text";
mysqli_query ($con,$sql) or die ($sql); 




}
*/

?>