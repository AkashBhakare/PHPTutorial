<?php
$name = "Akash is a good boy";
echo $name;
echo "<br>";

echo "The length of ". "my is string ". strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "Akash");
echo "<br>";
echo str_replace("Akash", "Akya", $name);
echo "<br>";
echo str_repeat("$name", 4);
echo "<br>";

echo "<pre>";

echo rtrim("  this is a good boy ");
echo ltrim("  this is a good boy ");
echo  "</pre>";

?>