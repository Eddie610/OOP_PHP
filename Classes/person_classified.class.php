<?php
/* //creating a class
class Newclass{
    //contains properties(vaiables)&methods(functions)
    public $info = "Welcome to oop php programing";

}
//insterciating a  by creating an object
$object = new Newclass;
var_dump($object); */

//visibility and inheritance

class person_classified{
    
 // show of use of protected    
    protected $first_Name= "Daniel"; 
    private $last_Name= "Olige";
    private $age= "22";

   
    }

    

 class pet extends person_classified{
   
   // show of use of protected 
     public function owner(){
        $a=$this->first_Name;
        return $a;
    } 
} 