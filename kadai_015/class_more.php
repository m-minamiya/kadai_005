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
            public function show_price() {
                echo $this->price;
            }
        }

        class Animal {
            //プロパティを定義する
            private $name;
            private $height;
            private $weight;

            //コンストラクタを定義する
            public function __construct($c, $d, $e) {
                $this->name =$c;
                $this->height =$d;
                $this->weight =$e;
            }
            
            //メソッドを定義する
            public function show_height() {
                echo $this->height;
            }
        }

        //インスタンス化する
        $potato = new Food('potato', 250);
        $dog = new Animal('dog', 60, 5000);

        //インスタンスを出力する
        print_r($potato);
        echo '<br>';

        print_r($dog);
        echo '<br>';

        //メソッドにアクセスして実行する
        $potato->show_price();
        echo '<br>';

        $dog->show_height();
        ?>
    </p>
</body>
</html>