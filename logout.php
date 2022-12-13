<?php
$validade = time()-3600;
$res=setcookie('cliente', '',$validade,"/","",false,true);

if($res=TRUE){
    ?>
    <script type="text/javascript">window.location.replace("index.php");</script>
    <?php
}

