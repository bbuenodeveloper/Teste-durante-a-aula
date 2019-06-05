<?php

//$arquivo = fopen ('texto.txt', 'r');
//$tamanho = filesize ('texto.txt');
//$conteudo = fread($arquivo, $tamanho);
//fclose($arquivo);


//$conteudo = file_get_contents('texto.txt');
//$conteudo = $conteudo. "Ola mundo";

//file_put_contents('texto.txt', "Ola mundo", FILE_APPEND);

file_put_contents('texto.txt',"Boa tarde galera");
$conteudo = file_get_contents('texto.txt');

?>

<h1><?php echo $conteudo ?> </h1>

