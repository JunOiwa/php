<?php

function total($score1,$score2,$score3){
    $value=$score1+$score2+$score3;
    return $value;
}
$total=total(100,50,80);

if($total>210){
    echo "合計点は".$total."点なので合格です";
}else{
    echo "合計点は".$total."点なので不合格です";
}