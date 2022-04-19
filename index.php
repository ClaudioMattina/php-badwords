<?php 

$nome = "claudio"; 

$cognome = " ". $_GET['cognome'] . " ";

echo rtrim($nome) . rtrim($cognome);
?>

<pre>
    <?php

    var_dump(strlen($nome . $cognome))

    ?>
</pre>

