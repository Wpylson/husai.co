<?php 
include("db.php");
$email = $_GET["email"];
$telefone = $_GET["telefone"];
$nome = $_GET["nome"];
$sobrenome = $_GET["sobrenome"];
$senha = $_GET["senha"];
$conf_senha = $_GET["conf_senha"];
$termos=$_GET["termos"];

if ($senha != $conf_senha) {
	  ?>
    <script type="text/javascript">window.location.replace("signup.php?errSenha=true");</script>
    <?php
}else{
	$selverycod = mysqli_query($conn,"SELECT * FROM user_geral WHERE email='$email' AND nome='$nome' ");
	if (mysqli_num_rows($selverycod)>=1) {
		 ?>
    <script type="text/javascript">window.location.replace("signup.php?erro=true");</script>
    <?php
	}else{
		 $ascii = implode('', array_merge(range('a', 'z'), range(0, 9)));
        $ascii = str_repeat($ascii, 5);
        $idBankya = substr(str_shuffle($ascii), 0, 8);
         $data = date("Y")+1;
         $validade = date("m").'/'.$data;

        $inser = "INSERT INTO `user_geral` (`nome`, `sobrenome`, `email`, `senha`, `telefone`, `dataNascimento`, `genero`, `nif`, `localizacao`, `estado_provincia`, `cod_postal`, `pais`, `concordar_termos`)
        VALUES ('$nome','$sobrenome','$email','$senha','$telefone',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$termos')";
         $cogvery = mysqli_query($conn,$inser);
         if ($cogvery) {
         	 ?>
    <script type="text/javascript">window.location.replace("clientarea.php");</script>
    <?php
         	setcookie("cliente",$email);
         }
	}
}
 ?>
