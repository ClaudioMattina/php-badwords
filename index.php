<?php 

$paragrafo = "Salve sign."; 

$cognome = " ". $_GET['lastName'] . " ";



echo rtrim($paragrafo);

$array=["ciao", "ragazzo", "ti", "chaimi", $_GET['lastName'],];


?>

<pre>
    <?php

    var_dump($array);
    var_dump(strlen($paragrafo));
    var_dump(str_replace($_GET['lastName'], "***",implode(" ", $array ) ) );
    

    ?>
</pre>

