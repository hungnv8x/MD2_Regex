<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo("String's first character is uppercase");
    } else {
        echo("String's first character is not uppercase");
    }
}

isFirstLetterUpperCase('Codegym');
echo "<br>";
isFirstLetterUpperCase('cdegym');
echo "<br>";
if (preg_match("/[a-z]/","Nguyen van Nam")){
    echo "Ok";
}else{
    echo "Not Ok";
}
echo "<br>";
if (preg_match("/[a-z]/","NGUYEN VAN NAM")){
    echo "Ok";
}else{
    echo "Not Ok";
}