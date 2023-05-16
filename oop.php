<?php
    /*
    オブジェクト指向を用いる理由・目的
    オブジェクト→「モノ」
    ・コードを短くすることができる（可読性）
    ・同じようなコードを使いまわせる（再利用性）
    ・メンテナンスしやすい（保守性）


    「手書き型プログラミング言語」→C言語など
    「オブジェクト指向型プログラミング言語」→PHP、Python、Ruby、Java・・・

    ＊書き方の基礎（４つの言葉を覚える！）
    １．クラス
        ・設計書
    ２．インスタンス
        ・実体（モノ）
    ３．プロパティ
        ・特徴、特性（値、要目）
    ４．メソッド（関数）
        ・技
        例）var_dump() → デバッグ処理で使う
            echo → 値を表示する
    */

    //車を作るプログラミング
    //１．クラスを作る

    Class Car {
        //３．プロパティ
        public $name;
        public $speed;
        public $color;

        //４．メソッド
        function start() {
            echo 'エンジンをかけました<br>';
        }

        function run() {
            echo '走り出しました<br>';
        }
        //時速を表示する
        function showSpeed(){
            echo '時速'.$this->speed.'ｋｍです<br>';
        }

        function showColor(){
            echo $this->name.'の色は'.$this->color.'です。<br>';
        }
    }

    //２．インスタンス化
    $car = new Car();
    $car->start();
    $car->speed = 60;
    $car->showSpeed();
    $car->run();

    $toyota = new Car();
    $toyota->start();
    $toyota->speed = 80;
    $toyota->showSpeed();

    $toyota->name = 'TOYOTA';
    $toyota->color = '赤';
    $toyota->showColor();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>