<?php
$arr=[1,2,3,4,5,6];

for($i=5;$i>=0;$i--){
    echo "$arr[$i]";
    echo "<br>";
}
echo "using reverse function";
$array=array_reverse($arr);
for($i=0;$i<=5;$i++){
    echo "$array[$i]";
    echo"<br>";
}
?>