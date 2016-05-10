<?php
$a = array('あああああ','いいいいい','ううううう','えええええ','おおおおお');
foreach($a as $hen){
    echo $hen . '<br/>';
}
echo '<br/>';

$a[5]='研修';

foreach($a as $key=> $value){
    echo $key .'    '. $value . '<br/>';
}
?>
