<?php
class person{
    private $first_Name= "Daniel";

     private $last_Name= "Olige";
    private $age= "22";

    public static $drinkingage=18;

    public static function setdrinkingage($newDA){
        self::$drinkingage=$newDA;
    }
   /*  public function __construct($name,$skincolor,$age){
        $this->name=$name;
        $this->skincolor=$skincolor;
        $this->age=$age;
     }
     public function setname($name){
        $this->name=$name;
     } */
    public function getDA(){
        return self::$drinkingage;
    }

    }

    
    class pet {
        
         public function owner(){
             $a="Hello there!";
             return $a;
         }
        }