<?php
    class Product {
    // クラス（設計図）→オブジェクトを作るための設計図
        private $id;
        private $name;
        private $price;
        private $image;
        // オブジェクトのプロバティ（情報）を置くための箱
        // privateを使うことで他のクラスやコードで＄nameを変更できないようにしている

        public function __construct($id,$name,$price,$image){
            // コンストラクタ（作業手順）
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            // オブジェクトの情報を箱（public $name;）に入れるための記述
        }

        public function getId(){
            return $this->id;
        }

        public function getName(){
        // private $name;で他のクラスからnameの値は変えられない。けれど、nameの値を取得することはできるようしているメソッド
            return $this->name;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getImage(){
            return $this->image;
        }

        private function calPriceIncludingTax(){
        // calPriceIncludingTax()はdisplayPrice()でしか呼ばれないので、privateにしている
            $taxRate = 0.1;
            return $this->price + $this->price * $taxRate;
        }

        public function displayPrice() {
            $price = $this->calPriceIncludingTax();
            return $price."円";
        }
    }
?>