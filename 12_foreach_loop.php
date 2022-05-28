<?php
echo "Welcome to the world of foreach loops <br>";
$arr = array("bananas","apples","Harpic","Bread");

for ($i=0; $i < count($arr); $i++){
    echo $arr[$i];
    echo "<br>";
}

//Better way to this- foreach loops
foreach ($arr as $value){
    echo "$value <br>";
}

?>