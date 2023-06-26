<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $data = ['name' => '玉ねぎ', 'price' =>200, 'region' => '北海道'];
        foreach ($data as $key=>$value) {
            echo "{$key}：{$value}<br>";
        }
        ?>
    </p>
</body>
</html>