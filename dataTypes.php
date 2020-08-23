<?php
echo "<h3>". "PHP supports the following data types:" . "</h3>";
echo "<ul>"."<li>" . "String" ."</li>";
echo"<li>" . "Integer" ."</li>";
echo"<li>" . "Float (floating point numbers - also called double)" ."</li>";
echo"<li>" . "Boolean" ."</li>";
echo"<li>" . "Array" ."</li>";
echo"<li>" . "Object" ."</li>";
echo"<li>" . "NULL" ."</li>";
echo"<li>" . "Resource" ."</li>" . "</ul>";

echo "<h2>" . "Example for String " ."</h2>";
echo "<p>" . "\$x = \"Learning\"" . ";". "</p>";
echo "<p>" . "\$y = \"PHP\"" . ";" . "</p>";
echo "<p>" . "\$x + \$y = " . "</p>";
$x = "Learning";
$y = "PHP";

echo  "Answer =>" . " " . $x ." ". $y;


echo "<h2>" . "Example for Integer " ."</h2>";
echo "<h3>" . "The PHP var_dump() function returns the data type and value" . "</h3>";
echo "\$i = 1234 => ";
$i = 1234;

echo var_dump($i);

echo "<h2>" . "Example for Float " ."</h2>";

echo "\$j = 1234.7 => ";
$j = 1234.7;

echo var_dump($j);

echo "<h2>" . "Example for Boolean " ."</h2>";
echo "<p>" . "A Boolean represents two possible states: TRUE or FALSE." . "</p>";

echo "\$x = True";
echo "\$y = False";

echo "<h2>" . "Example for Array " ."</h2>";
echo "<p>" . "An array stores multiple values in one single variable." . "</p>";

echo "<h4>" . "\$Languages = array(\"C\",\"C#\",\"Java\",\"Python\",\"PHP\",\"HTML\",\"CSS\",\"BS4\",\"Javascript\",\"Mysql\");". "</h4>";
$Languages = array("C","C#","Java","Python","PHP","HTML","CSS","BS4","Javascript","Mysql");
var_dump($Languages);

echo "<h2>" . "Example for Object " ."</h2>";

//class Car {
//    function Car() {
//        $this->model = "VW";
//    }
//}
//
//// create an object
//$herbie = new Car();
//
//// show object properties
//echo $herbie->model;

echo "<h2>" . "Example for NULL " ."</h2>";
$x = "Hello world!";
$x = null;
var_dump($x);

echo "<h2>" . "Example for Resource " ."</h2>";
echo "<p>" ."A common example of using the resource data type is a database call." . "</p>";
echo "<p>" ."This is advanced topic" . "</p>";