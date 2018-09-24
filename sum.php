<?php
function sum($max) {
   $result = 0;

   for($i = 1; $i <= $max; $i++ ){
       $result += $i;
   }

   return $result;
}

echo sum(100);
?>
<?php
function print_number(){

    for($i = 0; $i < 100; $i++){
        echo $i;
    }
}
?>
<?php
$string = "ABCDEF";
echo strlen($string);
?>

<?php
$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);

echo $new_string;

?>

<?php
function f($arg)	{
	return $arg*2;
}
echo f(7);
 ?>

 <?php

function add($a, $b){
  $sum = $a + $b;
  return $sum;
}
$result = add(8,5);

echo $result;

?>

<?php

$arr = array(1, 3, 5, 7, 9);
echo "product(arr) = " . array_product($arr)."\n";
?>

<?php

$arr = array(1, 3, 5, 7, 9);
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arr[0];
foreach($arr as $a){
//どうしたらいいかわからない・・・・
 if($max_namber < ＄a){
    $max_namber = ＄a;
   }
  }
  return max_namber;
}
echo max(array(1, 3, 5, 7, 9));

?>
