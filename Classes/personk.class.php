<?php
class personk{
    private $first_Name= "Daniel";

   private $last_Name= "Olige";
    private $age= "22";

    //access by using keyword this
    public function owner(){
        $a=$this->first_Name;
        return $a;
    }
}