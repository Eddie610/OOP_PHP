<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
require_once 'Classes/you.class.php';
$object = new you;
//Deleting object
/* unset($object); */
echo $object->getproperty();



?>
</body>
</html>



