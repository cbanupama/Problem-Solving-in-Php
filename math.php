<?php
echo "<h3>" . "pi() function Returns the Value of PI" . "</h3>";
echo pi();

echo "<h3>" . "The min() and max() funcations can be used to find the lowest and highest value in a list of arguments" . "</h3>";

echo "<p>" . "min(0, 150, 30, 20, -8, -200)" . "</p>" ;
echo(min(0,150,30,20,-8,-200));// returns -200

echo "<p>" . "max(0, 150, 30, 20, -8, -200)" . "</p>" ;
echo(max(0, 150, 30, 20, -8, -200));  // returns 150

echo "<h3>" . "The abs() function returns the absolute (positive) value of a number" . "</h3>";

echo "<p>" ."abs(-6.8)". "</p>";
echo(abs(-6.8));

echo "<h3>" . "The sqrt() function returns the square root of a number" . "</h3>";
echo "<p>" . "sqrt(121)". "</p>";
echo(sqrt(121));

echo "<h3>" . "The round() function rounds a floating-point number to its nearest integer" . "</h3>";
echo "<p>" . "round(0.60)" . "</p>";
echo(round(0.60));  // returns 1
echo "<p>" . "round(0.49)" . "</p>";
echo(round(0.49));  // returns 0

echo "<h3>" . "The rand() function generates a random number" . "</h3>";

echo(rand());
echo "<h3>" . "For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100)" . "</h3>";
echo(rand(10, 100));