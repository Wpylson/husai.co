<?php 
include("../db.php");
$idSol = $_GET['idSol'];
if(isset($idSol)){
	$upd = mysqli_query($conn,"UPDATE `solicitacao` SET `visto`='Sim' WHERE idSolicitacao='$idSol' ");
if ($upd) {
	header("location: solicitacoes.php");
}
}

    
 ?>