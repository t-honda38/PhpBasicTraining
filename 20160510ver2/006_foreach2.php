<?php
$a = ['A'=>1, 3=>2, 'Z'=>'Hello', 9=>8, "W"=>"ooo"];
var_dump($a);
echo "<br/>";
foreach ( $a as $key => $value) {
  echo $key .",". $value ."<br/>";
}
?>
