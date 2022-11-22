<?php
# https://localhost/slideUpload.php

if(isset($_POST['upLoadImage'])){
    require_once("connection.php");
    $caption=addslashes($_POST['caption']);
    $title=addslashes($_POST['title']);
    $alt=addslashes($_POST['alt']);
    $src=$_FILES['src']['name'];
    $temp=$_FILES['src']['tmp_name'];
    $extensao=pathinfo($src, PATHINFO_EXTENSION);
    $src=sha1($src);
    $src=$src.".".$extensao;
    $pasta="img/";
    $src=$pasta.$src;

    $sql="INSERT INTO slide VALUES (NULL, '$src','$title','$alt','$caption',1)";
    mysqli_query ($con,$sql) or die($sql);   
    move_uploaded_file($temp, $src);
    $path="paginaslide.html?msg=sucesso";




#successo
}else{
    $path="paginaslide.html?msg=negado";

#falha
}

header("location:$path");



?>