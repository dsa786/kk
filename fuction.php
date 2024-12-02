<?php
function findSquareRoot($number){
    if($number<0){
        return"invalid input"
    }
    $squareroot=sqrt($number)
    return $squareroot
}
$number=25;
echo"the squareroot of $number is:".findSquareRoot($number);
?>