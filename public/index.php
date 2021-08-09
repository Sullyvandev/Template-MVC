<?php

require __DIR__.'/../vendor/autoload.php';


if (isset($_GET['page'])) {
  
    $currentPage = $_GET['page'];
} else {
   
    $currentPage = "/";
}


$altoRouter = new AltoRouter();

$altoRouter->setBasePath($_SERVER['BASE_URI']);



$altoRouter->map( 
/* 1 */'GET',
/* 2 */'/', 
/* 3 */    [
        "method" => "affichePageHome",
        "controller" => "oShop\Controllers\MainController"
    ], 
/* 4 */'home' );


$matchingRoute = $altoRouter->match();



if ($matchingRoute) {
   
    
    $tableauInfo = $matchingRoute['target'];
    $nomMethode = $tableauInfo['method'];

  
    $parametresRoute = $matchingRoute['params'];

    $nomController = $matchingRoute['target']['controller'];
   

    $controller = new $nomController();
   

    
    $controller->$nomMethode($parametresRoute);
} 
else 
{
   
    exit('404 not found');
}



