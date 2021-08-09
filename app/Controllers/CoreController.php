<?php

namespace nameBDD\Controllers;



class CoreController {

    protected function show($viewName, $viewData = [])
    {
      
        global $altoRouter;

      

        $absoluteURL = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
        

        require_once __DIR__.'/../views/header.tpl.php';

       
        require_once __DIR__."/../views/{$viewName}.tpl.php";

        require_once __DIR__.'/../views/footer.tpl.php';

       
    }
}