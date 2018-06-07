<?php
    require 'classe/C_BDD.php';
    $bdd = new C_BDD();
    //Imporatation de classe C_BDD.php
    require 'libs/Smarty.class.php';
    
    $Smarty = new Smarty();
    $Smarty->compile_dir ='tmp';
    $Smarty->template_dir = 'templates';
    
    $name_web = $bdd->getvarweb();
    
    if(isset($_GET['login'])){
        if(!empty($_POST['pseudo']) && !empty($_POST['password']))
        {            
            $login = htmlspecialchars($_POST['pseudo']);
            $mdp = sha1($_POST['password']);       
            $rsp = $bdd->user_auth($login, $mdp);
            if($rsp==1){
                $array = array(
                    'web_name' => $name_web['web_name'],
                    'sucess' => array('sucessn' => 1,
                                    'msg' => 'Connection réussie')
                );
                $Smarty->assign('var',$array); 
            }
            else
            {
                $array = array(
                    'web_name' => $name_web['web_name'],
                    'error' => array('errorn' => 1,
                                    'msg' => 'Utilisateur ou mot de passe incorrect')
                );
                $Smarty->assign('var',$array); 
            }
        }
        else
        {
            $array = array(
                'web_name' => $name_web['web_name'],
                'error' => array('errorn' => 1,
                                 'msg' => 'Vous avez pas remplie tout les champs')
            );
            $Smarty->assign('var',$array);
        }
        $Smarty->display('login.tpl');
    }
    else
    {  
        $array = array(
          "web_name" => $name_web['web_name']  
        );

        $Smarty->assign('var',$array);

        $Smarty->display('login.tpl');
    }
?>