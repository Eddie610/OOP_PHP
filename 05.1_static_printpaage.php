<!DOCTYPE html>
<html >
<head>
  
</head>
<?php

/* include 'Autoloader.php'; */
?>
<body>
    <?php
    require_once 'Classes/person.class.php';
   echo 'Drinking Age in Uganda is;',person::$drinkingage;
   person::setdrinkingage(21);
   echo '<br>';
   echo  'Drinking Age in America is;', person::$drinkingage;
   echo '<br>';
   //Accessing a static property thru an object function
   $person1=new person('okiki','peal',23);
   echo $person1->getDA();
    ?>
</body>
</html>