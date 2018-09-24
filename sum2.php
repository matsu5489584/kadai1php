//strip_tags//
<?php
$str = '<h1>strip_tags</h1>';
echo strip_tags($str);
?>

//strip_tags//
<?php
$animal = ['cat','dog','bird','monkey'];

array_push($animal, 'pig', 'rabbit');

print_r($animal);

?>

//array_merge//
<?php
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];

$array = array_merge($array1, $array2, $array3);

print_r($array);
?>

//time//
<?php
echo date('y/m/d',time());

?>

//mktime(一週間後を設定)//
今日から一週間後は
<?php echo
       date('Y/m/d',mktime( 0, 0, 0,
          date('m'),
          date('d')+7,
          date('Y')
    ));
?>
です。

//date//
<?php
echo date('Y/m/d') . '($week_name[$w])';

?>
