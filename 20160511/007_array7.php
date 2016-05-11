<?php
$a[0][0]='AA';
$a[0][1]='BB';
$a[1][0]='BA';
$a[1][1]='BB';
$a[2][0]='CA';
$a[2][1]='CC';

var_dump($a);
echo '<br/>';


foreach($a as $key=> $value){
    foreach($value as $key2=> $value2){

    echo  $key.$key2 .' '. $value2.'<br/>';
}
}

?>
