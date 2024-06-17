<?php
$name = htmlspecialchars($_GET['name1'], ENT_QUOTES);
$con = htmlspecialchars($_GET['A'], ENT_QUOTES);
$number = htmlspecialchars($_GET['num'], ENT_QUOTES);
echo "私の名前は".$name."<br/>";
echo "ご注文の商品は".$con."<br/>";
echo "注文数は".$number;