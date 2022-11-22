<?php
# http://localhost/site-semjuv/connection.php
define("host","localhost");
define("user","root");
define("psw","");
define("db","slideshow");
$con=mysqli_connect(host, user, psw, db) or die("connection DB error");

?>