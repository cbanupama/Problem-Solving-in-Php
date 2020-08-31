<?php
echo "<h4>" . "Syntax :- define(name, value, case-insensitive)" . "</h4>";

define("Greeting", "Good Evng All");

echo Greeting;
echo "<h1>" . "Case insensitive" . "</h1>";

echo "<h4>" . "define(\"Greetings\", \"Good Morning All\", true);" . "</h4>";
define("Greetings", "Good Morning All", true);

function great() {
    echo Greetings;
}
great();