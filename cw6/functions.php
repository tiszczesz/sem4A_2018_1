<?php
function NWDIter($a,$b){
    $temp = $a;
    while($b!=0){
        $temp = $a;
        $a = $b;
        $b = $temp % $b;
    }
    return $a;
}
function NWDRec($a,$b){
    if($b==0)        return $a;
    return NWDRec($b, $a%$b);
}
