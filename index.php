<?php

// echo"phpの勉強をしています";

// echo 5+2;//結果は7

// echo "5+2";//結果は5+2

// $apple="りんご";
// echo "$apple";

// $num="10";
// echo $num+$num;

// $keisan=30;
// if($keisan >10){
// echo"30は10より大きい数字です";
// }
//条件が成立するため処理が実行される

// $a=1;
// $b=2;
// if($a === 1){
//     echo"1が表示されました";
// }else{
// echo"2が表示されました";
// }

// if($b === 1){
//     echo"1が表示されました";
// }else{
// echo"2が表示されました";
// }

//乱数の範囲を指定し、1~6の間で乱数を生成
// echo mt_rand(1,6);
//mt_rand();これが関数



?>


<?php

$fortunes = array('大吉','中吉','小吉','末吉','凶');
$result = $fortunes[rand(0, count($fortunes)-1)];
echo "あなたの今日の運命は". $result . "です。". PHP_EOL;


echo '<img src="img/usagi.png" alt="" >';

?>