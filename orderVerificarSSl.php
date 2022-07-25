<?php 
include("db.php");
$idProduto = $_GET["idProduto"];
$selCertV = mysqli_query($conn,"SELECT * FROM certificado_ssl WHERE id='$idProduto' ");
$ascCert = mysqli_fetch_assoc($selCertV);
$preco = $ascCert["preco"];
$tipo = $_GET["tipo"];
 if (!isset($_COOKIE["cliente"])) {
    	?>
    <script type="text/javascript">window.location.replace("signin.php");</script>
    <?php
  }else{
    $cliente = $_COOKIE["cliente"];
    $selCli = mysqli_query($conn,"SELECT * FROM user_geral WHERE email='$cliente' ");
    $ascCli = mysqli_fetch_assoc($selCli);
    $user = $ascCli["email"];
     $insert = "INSERT INTO `carrinho`(`idprod`, `tipo`, `dominio`, `designacao`, `quantidade`, `usuario`, `preco`) VALUES ('$idProduto','$tipo','null','null',1,'$user','$preco')";
     $cog = mysqli_query($conn,$insert);
     if ($cog) {
     	?>
    <script type="text/javascript">window.location.replace("ordernextvery.php");</script>
    <?php
     }
  }
 ?>