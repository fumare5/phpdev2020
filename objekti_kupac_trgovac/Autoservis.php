<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Autoservis
 *
 * @author Danijel
 */
class Autoservis implements IPosao {
    private $auti=["audi",2,"bmw",3];
    
    function __construct() {
        
    }
    function ispis(){
        foreach ($this->auti as $key => $value) {
            echo " -- ".$value;
        }
    }
}