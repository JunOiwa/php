<?php
$count=0;
while($count<=100){
    if($count%3==0){
        $count++;
        continue;
    }elseif($count===19){
        break;
    }
    
    echo $count."<br/>";
    $count++;
}