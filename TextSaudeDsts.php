<?php
# https://localhost/TextSaudeDsts.php
  
if(isset($_POST['TextSaudeDst'])){
    require_once("connection.php");

    $TituloDST=addslashes($_POST['tituloDsts']);
    $TextDSTS=addslashes($_POST['textoDsts']);

    $sql="INSERT INTO tb_saudedst VALUES ('$TituloDST','$TextDSTS')";
    mysqli_query ($con,$sql) or die($sql);   


}
/*
$TituloDsts =addcslashes($_POST['tituloDsts']);
$TextDsts =addcslashes($_POST['textoDsts']);

$sql = "insert into tb_saudedsts(TituloDST,TextDSTS) VALUES
('$TituloDsts','$TextDsts');";
mysqli_query($con,$sql);
*/

?>