<?php
    class Cart {
        private static $items = [];

        public static function add($product, $count) {
        // 普通のメソッドは、クラスからオブジェクトを作ってから使う。static メソッドは、オブジェクトを作らなくても使える。
        // 疑問：全てのメソッドを static にしてしまえばいいのでは？
        // 回答：static メソッドは便利だが、全てのメソッドに使うとインスタンスごとのデータを扱うことができなくなります。
        // インスタンスごとに異なるデータを扱う必要がある場合は、通常のメソッドを使うべき。
            self::$items[] = ["product" => $product, "count" => $count];
        }
            public static function calTotalPrice() {
                $sum = 0;
                foreach(self::$items as $item) {
                    $price = $item["product"]->getPrice() * $item["count"];
                    $sum = $sum + $price;
                }
                return $sum;
            }
    }
?>