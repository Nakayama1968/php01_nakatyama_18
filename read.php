<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> 
    <title>入力履歴</title>
</head>

<body>

    <?php
    // ファイルを開く
    $openFile = fopen('data/data.txt', 'r');

    
    echo '<div class="w-75">';
    echo '<table class="table">';
    echo '<thead class="thead-light">';
    echo '<tr>';
    echo '<th class="col-xs-2">time</th>';
    echo '<th class="col-xs-2">t1_1</th><th class="col-xs-2">t1_2</th>';
    echo '<th class="col-xs-2">t1_3</th><th class="col-xs-2">t1_4</th><th class="col-xs-2">t1_5</th>';
    echo '<th class="col-xs-2">t2_1</th><th class="col-xs-2">t2_2</th>';
    echo '<th class="col-xs-2">t2_3</th><th class="col-xs-2">t2_4</th><th class="col-xs-2">t2_5</th>';
    echo '<th class="col-xs-2">t3_1</th><th class="col-xs-2">t3_2</th>';
    echo '<th class="col-xs-2">t3_3</th><th class="col-xs-2">t3_4</th><th class="col-xs-2">t3_5</th>';
    echo '<th class="col-xs-2">t4_1</th><th class="col-xs-2">t4_2</th>';
    echo '<th class="col-xs-2">t4_3</th><th class="col-xs-2">t4_4</th><th class="col-xs-2">t4_5</th>';
    echo '<th class="col-xs-2">t5_1</th><th class="col-xs-2">t5_2</th>';
    echo '<th class="col-xs-2">t5_3</th><th class="col-xs-2">t5_4</th><th class="col-xs-2">t5_5</th>';
    echo '</tr>';
    while ($str = fgets($openFile)) {
      
        $newStr = explode(',', $str);
        echo '<tr>';

       
        foreach ($newStr as $key => $val) {
            // $valは使わない
            echo '<td>' . $newStr[$key] . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
    // ファイルを閉じる
    fclose($openFile);
    ?>
    <a href="input.php">入力のページへ
    </a>
</body>

</html>