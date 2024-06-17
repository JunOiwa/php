<?php
function delta($w,$h){
    $aread=$w*$h/2;
    return $aread;
}
function square($a,$b){
    $areas=$a*$b;
    return $areas;
}
function trap($c,$e,$f){
    $areat=($c+$e)*$f/2;
    return $areat;
}
echo delta(5,5)."<br/>";
echo square(5,5)."<br/>";
echo trap(5,5,5);