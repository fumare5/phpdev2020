<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jez
 *
 * @author Danijel
 */
spl_autoload_register(function ($class) {
    include './' . $class . '.php';
});

class Jez extends AZivobice implements IBuhe{
    //put your code here
    public function ceskaj_se() {
        
    }

    public function glasaj_se() {
        
    }

    public function masi_repom() {
        
    }

}