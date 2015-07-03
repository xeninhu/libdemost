<?php
    mb_internal_encoding('UTF-8');

    mb_http_output('UTF-8');
    include("vendor/kevinlebrun/slug.php/src/Slug/Slugifier.php");
    //require 'vendor/autoload.php';
    
    $slugifier = new \Slug\Slugifier();
     
    // Definindo tratamento de caracteres com acentuação
    $slugifier->setTransliterate(true); 
     
    $frase = 'Frase com acentuação para teste de criação de slug';
     
    $slug = $slugifier->slugify($frase);
     
    echo '<b>Frase natural: </b>' . $frase . "<br /><br />";
    echo '<b>Frase com aplicação de slug: </b>' . $slug . "<br /><br />";
?>