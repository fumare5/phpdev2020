<?php

require_once './Race.php';

/**
 * Description of Rang_list
 *
 * @author Danijel
 */
class Rang_list {
    private $polje_utrka=array();
    private $no_laps1;
    private $no_laps2;
    private $no_laps3;
    private $no_laps4;
    private $no_laps5;
    private $no_laps6;
    private $no_laps7;
    private $no_laps8;

    public function add(Race $s){
        $this->polje_utrka[]=$s;
}

    public function ispisi_tablicu() {
        print_r($this->no_laps1);
    }

    public function dodaj($race) {
        
    }

}