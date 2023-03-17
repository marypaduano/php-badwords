<?php

$words=$_GET['words'];

$words_length=strlen($words);


$badword=$_GET['badword'];

$words2=str_replace($badword,"*****",$words);

$words2_length=strlen($words2);

?>

<h3>Questo è il paragrafo inserito: <?php echo $words ?></h3>
<p>La lunghezza del paragrafo è di caratteri n: <?php echo $words_length ?></p>
<h3>questo è il nuovo paragrafo con censura: <?php echo $words2 ?></h3>
<p>La lunghezza del paragrafo censurato è di caratteri n: <?php echo $words2_length ?></p>


