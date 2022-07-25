<?php 
include("../db.php");
$idCart = $_GET["idCart"];
$upd = mysqli_query($conn,"UPDATE `carrinhofeito` SET `estado`='sim' WHERE id='$idCart' ");
if ($upd) {
	header("location: invoice.php");
}
    
 ?>