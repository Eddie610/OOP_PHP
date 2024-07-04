<?php
spl_autoload_register('myautoloader');
//with in the function (we pass a variable that is automatically called when ever a class is instanciated)
function myautoloader($classname){
//creating a path
$path = "Classes/";
$extension = ".class.php";
$fullpath = $path.$classname.$extension;
 include_once ("$fullpath");
}
