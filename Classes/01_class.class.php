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

class person{
    private $first_Name= "Daniel";
/* // show of use of protected    
    protected $first_Name= "Daniel"; 
 */    private $last_Name= "Olige";
    private $age= "22";

    //access by using keyword this
    /* public function owner(){
        $a=$this->first_Name;
        return $a; */
    }

    class pet {
        /*  public $pet_name="snoopiedog"; */
         public function owner(){
             $a="Hello there!";
             return $a;
         }
        }

/* class pet extends person{
   /*  public $pet_name="snoopiedog"; */
   /*  public function owner(){
        $a="Hello there!";
        return $a;
    } */
   // show of use of protected 
   /*  public function owner(){
        $a=$this->first_Name;
        return $a;
    } */
//} */