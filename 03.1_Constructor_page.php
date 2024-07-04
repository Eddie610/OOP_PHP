<!DOCTYPE html>
<html>
<body>
    <?php

include 'includes/Autoloader.php';

    /* require_once 'Classes/03_Costructors.class.php'; */
   $person1=new students_constructor('opio','light skinned',32);
   $person2=new students_constructor('Odongo','dark skinned',22);

  

echo $person1->name; 
echo "<br>";
echo $person1->skincolor;
echo "<br>";
echo $person1->age;
echo "<br>";
echo $person2->name; 
echo "<br>";
echo $person2->skincolor;
echo "<br>";
echo $person2->age;
echo "<br>";

$person1->setname('Jhon');
echo $person1->name;
    ?>
</body>
</html>