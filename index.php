<?php

    require __DIR__.'/vendor/autoload.php';
    //vai incluir o autoloa das classes

    //Chamando a página HOME 
    use \App\Controller\Pages\home;
    
    //executar a página
    echo home::getHome();

?>