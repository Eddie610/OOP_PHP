<?php
 class you{
    public $data= "Object created";
    //constructor
    public function __construct(){
        echo "class instaniated";
    }
    public function getproperty(){
        return $this->data;
    }
    //Distructor
    public function __destruct(){
        echo "End of this class";
    }
 }