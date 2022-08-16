<?php

$cor = $_GET['cor'];
$tamanho = $_GET['tamanho'];

$url = urlencode('https://foneouvidolojaqrcodenf.anthonyanders14.repl.co/notafiscal.php?cor='. $cor . '&tamanho=' . $tamanho);


echo "<img src=\"https://qrickit.com/api/qr.php?d=$url\">";


?>
