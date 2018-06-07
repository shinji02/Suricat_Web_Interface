<?php
    require 'classe/C_BDD.php';
    $bdd = new C_BDD();
    //Imporatation de classe C_BDD.php
    require 'libs/Smarty.class.php';
    
    $Smarty = new Smarty();
    $Smarty->compile_dir ='tmp';
    $Smarty->template_dir = 'templates';
    
    $Smarty->display('login.tpl');
?>