<?php

require_once './Crew.php';

/**
 * Description of Race
 *
 * @author Danijel
 */
class Race {
    private $crew1;
    private $crew2;
    private $crew3;
    private $crew4;
    private $crew5;
    private $crew6;
    private $crew7;
    private $crew8;
    
    private $no_laps1=NULL;
    private $no_laps2=NULL;
    private $no_laps3=NULL;
    private $no_laps4=NULL;
    private $no_laps5=NULL;
    private $no_laps6=NULL;
    private $no_laps7=NULL;
    private $no_laps8=NULL;
    
    private $timerace;
            
    public function __construct(Crew $crew1,Crew $crew2,Crew $crew3,Crew $crew4,Crew $crew5,Crew $crew6,Crew $crew7,Crew $crew8){
        $this->crew1=$crew1;
        $this->crew2=$crew2;
        $this->crew3=$crew3;
        $this->crew4=$crew4;
        $this->crew5=$crew6;
        $this->crew6=$crew6;
        $this->crew7=$crew7;
        $this->crew8=$crew8;
    }

    public function get_no_laps() {
        return sprintf("%s"
                ,$this->$crew1->get_name()
                ,$this->$crew2->get_name()
                ,$this->$crew3->get_name()
                ,$this->$crew4->get_name()
                ,$this->$crew5->get_name()
                ,$this->$crew6->get_name()
                ,$this->$crew7->get_name()
                ,$this->$crew8->get_name()
                ,$this->no_laps1()
                ,$this->no_laps2()
                ,$this->no_laps3()
                ,$this->no_laps4()
                ,$this->no_laps5()
                ,$this->no_laps6()
                ,$this->no_laps7()
                ,$this->no_laps8());
    }

    public function no_laps1() {
        return $this->no_laps1;
        
    }

    public function no_laps2() {
        return $this->no_laps2;
        
    }
    
     public function no_laps3() {
        return $this->no_laps3;
        
    }
     public function no_laps4() {
        return $this->no_laps4;
        
    }
    
     public function no_laps5() {
        return $this->no_laps5;
        
    }
     public function no_laps6() {
        return $this->no_laps6;
        
    }
    
     public function no_laps7() {
        return $this->no_laps7;
        
    }
    
     public function no_laps8() {
        return $this->no_laps8;
        
    }
    
  
    
    
    public function drive(DateTime $timerace) {
        $this->no_laps1= rand(200,480);
        $this->no_laps2= rand(200,480);
        $this->no_laps3= rand(200,480);
        $this->no_laps4= rand(200,480);
        $this->no_laps5= rand(200,480);
        $this->no_laps6= rand(200,480);
        $this->no_laps7= rand(200,480);
        $this->no_laps8= rand(200,480);
    }

}
