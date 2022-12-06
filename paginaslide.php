

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <script src="/script/scriptADM.js" defer></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <div class="cabecalho">
        <a href="/index.php"><img src="/img/setavoltar.png" class="voltar" ></a>
    <a class="btn-voltar" href="/index.php" >voltar</a>
    <img class="cabeccalho-img" src="/img/cabecalho5.png" alt="bar">
    </div>
   </header>
<body>
     <form class="form" action="slideUpload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="caption" required placeholder="caption">
        <input type="text" name="title" required placeholder="titulo">
        <input type="text" name="alt" required placeholder="texto alternativo">
        <input type="file" name="src" required placeholder="imagem" accept="image/x-png, image/gif, image/jpeg">
        <button type="submit" name="upLoadImage">Enviar Slide</button>


    </form>

    <form class="form" action="atualizarDstS.php" method="post" enctype="">
        <h2>Área de saúde </h2>
        <input type="text" name="tituloDsts" required placeholder="titulo Dst's">
        <input type="text" name="textoDsts" required placeholder="texto Dst's">   
        <input type="text" name="TituloDepre" required placeholder="titulo depressão">
        <input type="text" name="textDepre" required placeholder="texto depressão">
        <input type="text" name="tituloDoenca" required placeholder="titulo doença">
        <input type="text" name="textDoenca" required placeholder="texto doença">
        <button type="submit" name="atualizarDSTS">Enviar</button>
    </form>

s
<style>

*{
    margin: 0;
    padding: 0;
    font-size: 15px;
    font-family: Arial, Helvetica, sans-serif;
    line-height:25px;
    margin-top: 0;
}

header{
    max-width: 1000vw;
    width: auto;
}

.voltar{
    float: none;
    height: 50px;
    position: absolute;
    margin-top: 27px;
    margin-left: 75px;
}

.btn-voltar{
    position: absolute;
    margin-top: 39px;
    margin-left: 120px;
    text-decoration: none;
    color: aliceblue;
}

.btn-voltar{
    background: none;
    border: none;
}

.cabecalho-img {
    height: 20px;
    width: 100%;
   margin-top: 0;
}

.cabecalho{
    position: fixed; 
    top: 0;
    width: 1000vw;
    background: rgb(0,183,255);
    background: -moz-linear-gradient(0deg, rgba(0,183,255,0) 0%, rgba(255,255,255,1) 100%);
    background: -webkit-linear-gradient(0deg, rgba(0,183,255,0) 0%, rgba(255,255,255,1) 100%);
    background: linear-gradient(0deg, rgba(0,183,255,0) 0%, rgba(255,255,255,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00b7ff",endColorstr="#ffffff",GradientType=1);
}

.form{
    margin-top: 150px;
}
</style>
</body>
</html>