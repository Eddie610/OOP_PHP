<!DOCTYPE html>
<html >
<head>
  
</head>
<body>
    <?php
   /*  include 'includes/Autoloader.php'; */
    //require_once 'Classes/person_classified.class.php';
   //require_once 'Classes/personk.class.php';
    require_once 'Classes/personH.class.php';
$pet01 = new pet();
 //$pet01 = new personk(); 
echo $pet01->owner();
echo '<br>';
echo $pet01->owner();
    ?>
</body>
</html>