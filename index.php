<?php
# http://localhost/site-semjuv/index.php
require_once("connection.php");
$sql="SELECT * FROM slide WHERE estado=1";
$query=mysqli_query($con, $sql) or die ($sql);
$total=mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/stilo.css/sstyle.css">
    <script src="/script/script.js" defer></script>
</head>
<body>
    <header >
        <div id="cabecalho">
           <div class="cabecalho-logo">
            <a href="/pagina-adm.html">adm</a>
            <img class="logo" src="/img/Semjuv_png_bitch1.png" alt="logo">
       </div>
       <div class="sheach-bar">
            <input type="search" placeholder="O que você está procurando?" name="search" id="search-txt">
            <a>
            <img src="/img/lupa.svg" alt=" width="" width="25px"height="25px" class="lupa-branca">
            </a>
        </div>
        </div>
        <img  id="cabecalho-bar" src="/img/bar.jpeg" alt="">
</header>
<section class="main">
    <div class="area-botoes">    
        <div class="botoes">
            <a href="#" id="btn1" class="botao">Educação</a>
            <a href="/pagsaude.html" id="btn2" class="botao">Saúde</a>
            <a href="#" id="btn3" class="botao">Ouvidoria</a>
        </div>
    </div>

<div class="center">

<div class="esquerdo">
  <div class="sobre">
    <h2 id="titulo-sobre">Sobre nós</h2>
    <p id="text-sobre">A Secretaria Nacional da Juventude trabalha para mudar a realidade dos jovens, principalmente daquele que vivem nas periferias e nas regiões mais pobres do país, exigindo que os agentes e instituições e instituições públicas provam políticas que garantam educação, empregos, saúde, lazer e segurança.</p>
 
    <div class="eventos-destaques">

      <div class="slideshow-container">


      <?php $i=1; while($fetch=mysqli_fetch_assoc($query)) {?>
        <div class="mySlides fade">
          <div class="numbertext"><?php echo $i;?> / <?php  echo $total; ?></div>
          <img src="<?php echo $fetch['src'];?>" title="<?php echo $fetch['title'];?>" alt="<?php echo $fetch['alt'];?>" style="width:100%">
          <div class="text"><?php echo $fetch['caption'];?></div>
        </div>
        <?php $i++; } ?>

        
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
        <?php for($i=1;$i<=$total;$i++) {?>
          <span class="dot" onclick="currentSlide(<?php echo $i;?>)"></span> 
        <?php } ?>
        </div>


  </div>

  </div>
</div>




  <div id="noticias-main">
    <div class="titulos-noticia">
      <h2 id="titulo-ultimas">Ultimas notícias</h2>  
      <a id="ver-mais"  href="#">Ver mais -></a>
    </div>
        <div class="" id="noticias-lista">
            <div id="content-list" class="content-list">
                  <h3 class="data-list">data</h3>
                  <h4 class="text-list">text-list-1aaaaaaaaasdasdasdadasdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h4>
            </div>
            <div id="content-list" class="content-list-2">

            </div>
            <div id="content-list" class="content-list-3">

            </div>
            <div id="content-list" class="content-list-4">

            </div>
            <div id="content-list" class="content-list-5">

            </div>
            <div id="content-list" class="content-list-6">

            </div>
            <div id="content-list" class="content-list-6">

        
            </div>
      
        </div>
  
  </div>



</div>
    
</section>
<section class="main-2">
  <div class="ouvidoria">
    <a class="ouvidoria-titulo">Ouvidoria</a>
    </div>
 </section>


</body>
</html>