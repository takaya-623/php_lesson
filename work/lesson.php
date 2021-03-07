<? 

// $i = 1;
// $x = "php";
// echo "第{$i}回{$x}入門講座";

// var_dump(6);
// var_dump('6');
// var_dump(1 == 1);
// var_dump(1 == 3);

// $score = 70;
// if($score >= 80) {
//   echo '合格';

// } else {
//   echo '不合格';
// }

// $arr = ['key1' => 'php', 'key2' => 'ruby', 'key3' => 'python'];
// // echo $arr['key1'];
// foreach ($arr as $lang) {
//   echo $lang;
// }

// function study($lang) {
//   echo "{$lang}入門";
//   echo "{$lang}講座";
// }
// study('php');
// study('ruby');

function calcTax($i) {
  if(is_int($i) === false) {
    throw new Exception('数値を指定して下さい');
  }
  return $i * 1.1;
}
echo calcTax("あ");
echo calcTax(1);

?>