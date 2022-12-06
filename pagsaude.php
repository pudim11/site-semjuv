<?php
# http://localhost/pagsaude.php
include("connection.php");
$sql="SELECT * FROM `tb_saudedst` WHERE 1";
$query=mysqli_query($con, $sql) or die ($sql);
$rs = mysqli_query($con, $sql);
$reg = mysqli_fetch_assoc($rs);
$textos =mysqli_fetch_assoc($query);




?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/script/scriptSAUDE.js"  defer></script>
    <link rel="stylesheet" href="/stilo.css/style-saude.css">
    <title>Saúde SEMJUV</title>

</head>
<body>
   <header>
    <div class="cabecalho">
        <a href="/index.php"><img src="/img/setavoltar.png" class="voltar" ></a>
    <a class="btn-voltar" href="/index.php" >voltar</a>
    <img class="cabeccalho-img" src="/img/cabecalho5.png" alt="bar">
    </div>
   </header>
<section class="main">
    <div class="area-botoes">
        <a id="btn-DSTs" class="" href="#tituloDsts" >DST's</a>
        <a id="btn-depressao" href="#tituloDepressão" >Depressão</a>
        <a id="doencas" href="#tituloDoencas" >Doenças</a>
    </div>
    
    <div id="area-text-saude"><a><a id="tituloDsts"> <?php echo $textos['TituloDST'];?></a>
    <div id="area-text-dsts"><a><a id="text-DSts"> <?php echo $textos['TextDSTS'];?></a>
    </div>

       <a id="tituloDepressão"><?php echo $textos['TituloDepre'];?></a>
    <div id="area-text-depresao">  
    
        <a id="text-depressao"><?php echo $textos['TextDepre'];?>
        </a>
    </div>
        <a id="tituloDoencas"><?php echo $textos['TituloDoenca'];?></a>
    <div id="area-text-doecas"> 
        <a id="text-doencas"><?php echo $textos['TextDoenca'];?>

        </a>
    </div>
    </div>
</section>

</body>
</html>