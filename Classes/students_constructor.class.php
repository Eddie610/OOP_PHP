<?php
 class students_constructor{
    public $name;
    public $skincolor;
    public $age;


    //seting values to the properties using constructor
 public function __construct($name,$skincolor,$age){
    $this->name=$name;
    $this->skincolor=$skincolor;
    $this->age=$age;
 }
 public function setname($name){
    $this->name=$name;
 }
}