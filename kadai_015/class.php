<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //クラスを定義する
        class Food {
            //プロパティを定義する
            private $name;
            private $price;

            //コンストラクタを定義する
            public function __construct($a, $b) {
                $this->name = $a;
                $this->price = $b;
            }
            //メソッドを定義する
            public function get_price () {
                return $this->price;
            }
            public function set_name($a) {
                $this->name = $a;
            }
            public function show_price() {
                echo $this->get_price();
            }
        }
        //インスタンス化する
        $potato = new Food('potato', 250);

        //メソッドにアクセスして実行する
        $potato->show_price();
        
        ?>
    </p>
</body>
</html>