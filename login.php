<?php 
include("db.php");
$email =$_GET["email"];
$senha =$_GET["senha"];
$selUser = mysqli_query($conn,"SELECT * FROM user_admin WHERE email='$email' AND senha='$senha' ");
$selGeral = mysqli_query($conn,"SELECT * FROM user_geral WHERE email='$email' AND senha='$senha' ");
if (mysqli_num_rows($selUser)>=1) {
    ?>
    <script type="text/javascript">window.location.replace(" Admin/index.php");</script>
    <?php
	setcookie("userHusai",$email);
}elseif (mysqli_num_rows($selGeral)>=1) {
    ?>
    <script type="text/javascript">window.location.replace("index.php");</script>
    <?php
	setcookie("cliente",$email);
}
else{
	?>
    <script type="text/javascript">window.location.replace("signin.php?erro=true");</script>
    <?php
}
 ?>

