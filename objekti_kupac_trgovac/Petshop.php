<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Petshop
 *
 * @author Danijel
 */
class Petshop implements IPosao {
    private $pets=[1,2,3,3];
    
    function __construct() {
        
    }
    function ispis(){
        foreach ($this->pets as $key => $value) {
            echo "Ljubimci";
        }
    }
}