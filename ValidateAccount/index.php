<?php
function checkAccount($account){
    $pattern = "/^[_a-z0-9]{6,}$/";
    if (preg_match($pattern,$account)){
        echo "Ok";
    }else{
        echo " Not ok";
    }
}
checkAccount("123abc_");
echo "<br>";
checkAccount(".@");