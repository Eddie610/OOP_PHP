<!DOCTYPE html>
<html>
<body>
    <?php
    include 'includes/Autoloader.php';
   /*  require_once '02_property&methods.php'; */
   $person1=new personCH();
   $person2=new personCh();
   $person1->setvalues('opio','light skinned',32);
   $person2->setvalues('Odongo','dark skinned',22);

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
    ?>
</body>
</html>