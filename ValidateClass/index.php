<?php
function checkClass($class){
    $pattern = "/^(C|A|P)+[0-9]{4}(G|H|I|K|L|M)$/";
    if (preg_match($pattern,$class)){
        echo "Ok";
    }else{
        echo "Not ok";
    }
}
checkClass("C0318G");
echo "<br>";
checkClass("M0318G");
echo "<br>";
checkClass("P0323A");