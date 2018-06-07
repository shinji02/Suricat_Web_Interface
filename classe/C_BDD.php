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
    
    public function getvarweb(){
        $this->connect();
        $sth = $this->M_BDD->prepare("SELECT * FROM var_web");
        $sth->execute();
        $this->deconnect();
        return $sth->fetch(PDO::FETCH_ASSOC);       
    }
    
    public function user_auth($user,$mdp){
        $this->connect();
        $sth = $this->M_BDD->prepare("SELECT * FROM user WHERE user=? AND password=?");
        $sth->execute(array($user,$mdp));
        $userexit = $sth->rowcount();
        $this->deconnect();
        return $userexit;
    }
    public function getuserinfo($user,$mdp){
        $this->connect();
        $sth = $this->M_BDD->prepare("SELECT * FROM user WHERE user=? AND password=?");
        $sth->execute(array($user,$mdp));
        $this->deconnect();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }
    
    public function deconnect(){
        $this->M_BDD = NULL;
    }
}
