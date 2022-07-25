<?php 
include("db.php");
$idProd = $_GET["idProd"];
$del = mysqli_query($conn,"DELETE FROM carrinho WHERE id='$idProd' ");
if ($del) {
	?>
    <script type="text/javascript">window.location.replace("ordernextvery.php");</script>
    <?php
}
 ?>