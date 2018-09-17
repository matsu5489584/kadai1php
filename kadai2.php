<?php

$name = "matsushita";

if ( $name === "matsushita") {
echo "私は　あなたの名前です";
} else {
echo "あなたの名前ではありません";
}

?>
<?php

$name="matsushita";

if($name === "tanaka") {
  echo "私は　あなたの名前です";
  } else {
  echo "あなたの名前ではありません";
  }

?>
<?php
  $total = 0;
for ($i = 0 ; $i <= 10000 ; $i++) {
  $total += $i;
}
echo $total;
 ?>
 <?php
$fruits = array("apple","grape","pear","peach","orange");
foreach ($fruits as $fruits) {
  echo $fruits;
  echo "\n";
}
 ?>
<?php
/* for1文の始めの価を定義する　*/
$start = 1;
/* for文の終わりの値を定義する */
$end = 101;

for($i=$start; $i<$end; $i++)

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0) {
    echo $i;
    echo"\n";
 }
?>
