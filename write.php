<?php
function h($s)
{
    // エラー対処する
    return htmlspecialchars($s, ENT_QUOTES);
}
$t1_1 = h($_POST['t1_1']);
$t1_2 = h($_POST['t1_2']);
$t1_3 = h($_POST['t1_3']);
$t1_4 = h($_POST['t1_4']);
$t1_5 = h($_POST['t1_5']);

$t2_1 = h($_POST['t2_1']);
$t2_2 = h($_POST['t2_2']);
$t2_3 = h($_POST['t2_3']);
$t2_4 = h($_POST['t2_4']);
$t2_5 = h($_POST['t2_5']);

$t3_1 = h($_POST['t3_1']);
$t3_2 = h($_POST['t3_2']);
$t3_3 = h($_POST['t3_3']);
$t3_4 = h($_POST['t3_4']);
$t3_5 = h($_POST['t3_5']);

$t4_1 = h($_POST['t4_1']);
$t4_2 = h($_POST['t4_2']);
$t4_3 = h($_POST['t4_3']);
$t4_4 = h($_POST['t4_4']);
$t4_5 = h($_POST['t4_5']);

$t5_1 = h($_POST['t5_1']);
$t5_2 = h($_POST['t5_2']);
$t5_3 = h($_POST['t5_3']);
$t5_4 = h($_POST['t5_4']);
$t5_5 = h($_POST['t5_5']);

$time = date('Y/m/d H:i:s');
// ファイルの文字列を作成するー

$str = $time . ',' . $t1_1 . ',' . $t1_2 . ',' . $t1_3 . ',' . $t1_4 . ',' . $t1_5 .
               ',' . $t2_1 . ',' . $t2_2 . ',' . $t2_3 . ',' . $t2_4 . ',' . $t2_5 .
               ',' . $t3_1 . ',' . $t3_2 . ',' . $t3_3 . ',' . $t3_4 . ',' . $t3_5 .
               ',' . $t4_1 . ',' . $t4_2 . ',' . $t4_3 . ',' . $t4_4 . ',' . $t4_5 .
               ',' . $t5_1 . ',' . $t5_2 . ',' . $t5_3 . ',' . $t5_4 . ',' . $t5_5;

$file = fopen('./data/data.txt', 'a');    
fwrite($file, $str . "\n");
fclose($file);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>書き込みデータ</title>
</head>

<body>
    <div class="read">
    <p><?= $t1_1 , $t1_2 , $t1_3 , $t1_4 , $t1_5 ?> </p>
    <p><?= $t2_1 , $t2_2 , $t2_3 , $t2_4 , $t2_5 ?> </p>
    <p><?= $t3_1 , $t3_2 , $t3_3 , $t3_4 , $t3_5 ?> </p>
    <p><?= $t4_1 , $t4_2 , $t4_3 , $t4_4 , $t4_5 ?> </p>
    <p><?= $t5_1 , $t5_2 , $t5_3 , $t5_4 , $t5_5 ?> </p>
    </div>
    <a href='read.php'>履歴ページへ</a>
    <br>
    <a href='input.php'>入力ページへ</a>
</body>

</html> 