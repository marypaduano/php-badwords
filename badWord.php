<?php

$words=$_GET['words'];
$words_trim = trim($words);


$words_length=strlen($words_trim);


$badword=$_GET['badword'];
$badword_trim = trim($badword);


$words2=str_replace($badword_trim,"*****",$words_trim);
$words2_trim = trim($words2, "*****");


$words2_length=strlen($words2_trim);

?>

<h3>Questo è il paragrafo inserito: <?php echo $words_trim ?></h3>
<p>La lunghezza del paragrafo è di caratteri n: <?php echo $words_length ?></p>
<h3>questo è il nuovo paragrafo con censura: <?php echo $words2 ?></h3>
<p>La lunghezza del paragrafo censurato è di caratteri n: <?php echo $words2_length ?></p>


