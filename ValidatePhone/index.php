<?php
function checkPhone($phone){
    $pattern = "/^\([0-9]{2}\)-\(0[0-9]{9}\)/";
    if (preg_match($pattern,$phone)){
        echo "Ok";
    }else{
        echo "Not ok";
    }
}
checkPhone("(84)-(0978489648)");
echo "<br>";
checkPhone("(a8)-(22222222)");