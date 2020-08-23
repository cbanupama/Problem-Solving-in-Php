<?php

echo "<h2>" . "PHP String Functions" . "</h2>";
echo "<p>" . "Hello World!" . "</p>";
$x = "Hello World!";
echo "<p>". "strlen() - Return the Length of a String." . "</p>";
echo strlen($x);
echo "<p>". "str_word_count() - Count Words in a String" . "</p>";
echo str_word_count($x);
echo "<p>". "strrev() - Reverse a String" . "</p>";
echo strrev($x);
echo "<p>". "strpos() - Search For a Text Within a String" . "</p>";
echo strpos($x, "World");
echo "<p>". "str_replace() - Replace Text Within a String" . "</p>";
echo str_replace("World" , "Dolly", $x);