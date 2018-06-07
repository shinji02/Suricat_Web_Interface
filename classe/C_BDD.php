<?php


/**
 * Description de classe C_BDD
 *
 * @author jovann
 * @testdox Gestion de la base de donnée
 */
class C_BDD {
    
    private $M_BDD;
    
    public function connect(){
        $this->M_BDD = new PDO('mysql:host=localhost;dbname=web','root',''); // -> Xamp
        //$this->M_BDD = new PDO('mysql:host=localhost;dbname=web;charset=UTF-8','phpmyadmin','user'); // -> Raspberry
    }
    
    public function deconnect(){
        $this->M_BDD = NULL;
    }
}
