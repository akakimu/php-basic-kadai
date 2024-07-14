<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP課題_foreach文を使って連想配列の値とキーを出力しよう</title>
    </head>

    <body>
        <p>
            <?php
            $variable_name = ['名前' => '玉ねぎ', '価格' => 200, '値段' =>'北海道'];
            foreach ($variable_name as  $key => $value) {
                echo "{$key} : {$value}<br>";
            }
            ?>
        </p>
    </body>
</html>