<?php 
include("connection.php");


if(isset($_POST['atualizarDepre'])){
    require_once("connection.php");


    $TituloDepre=addslashes($_POST['tituloDsts']);
    $TextDepre=addslashes($_POST['textDepre']);
    
    $sql= "UPDATE tb_saudedepre SET tituloDsts = '$TituloDepre',textDepre = '$TextDepre' WHERE ID_Dpre=1";
    
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