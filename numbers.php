<?php
echo "<h2>". "Integer" . "</h2>";

echo "<p>". "var_dump(is_int(1234)" . "</p>";
var_dump(is_int(1234));

echo "<p>". "var_dump(is_int(1234.8)" . "</p>";
var_dump(is_int(1234.8));

echo "<h2>". "Float" . "</h2>";
echo "<p>". "var_dump(is_float(1234)" . "</p>";
var_dump(is_float(1234));

echo "<p>". "var_dump(is_float(1234.8)" . "</p>";
var_dump(is_float(1234.8));

echo "<h2>". "Infinity" . "</h2>";
echo "<p>". "var_dump(is_infinity(4.86e6666666)" . "</p>";
var_dump(is_infinite(4.86e6666666));

echo "<p>". "var_dump(is_infinity(4.866666666)" . "</p>";
var_dump(is_infinite(4.866666666));

echo "<h2>". "NAN(Not a Number)" . "</h2>";
echo "<p>". "var_dump(acos(8)" . "</p>";
var_dump(acos(8));

echo "<h2>". "Numerical Strings" . "</h2>";
echo "<p>". "var_dump(is_numeric(2345)" . "</p>";
var_dump(is_numeric(2345));

echo "<p>". "var_dump(is_numeric(\"2345\")" . "</p>";
var_dump(is_numeric("2345"));

echo "<p>". "var_dump(is_numeric(\"23.45\" + 100)" . "</p>";
var_dump(is_numeric("23.45" + 100));

echo "<p>". "var_dump(is_numeric(\"Hello\")" . "</p>";
var_dump(is_numeric("Hello"));

echo "<h2>". "Casting Strings and Floats to Integers" . "</h2>";

echo "<h4>" . " Cast float to int" . "</h4>";
echo "<p>". "\$x = 23465.768;" . "</p>";
echo "<p>". "\$int_cast = (int)\$x;" . "</p>";

$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<h4>" . " Cast string to int" . "</h4>";
echo "<p>". "\$x = \"23465.768\";" . "</p>";
echo "<p>". "\$int_cast = (int)\$x;" . "</p>";

$x = "23465.768";
$int_cast= (int)$x;
echo $int_cast;