<?php 
include("../db.php");
$idCart = $_GET["idCart"];
$idCartView = $_POST['idCart'];
if(isset($idCart)){
	$upd = mysqli_query($conn,"UPDATE `carrinhofeito` SET `estado`='sim' WHERE id='$idCart' ");
if ($upd) {
	header("location: invoice.php");
}
}
if(isset($idCartView)){
	$upd = mysqli_query($conn,"UPDATE `carrinhofeito` SET `estado`='sim' WHERE id='$idCartView' ");
if ($upd) {
	header("location: invoice.php");
}
}
    
 ?>