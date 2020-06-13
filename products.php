<?php
  require_once './classes/product.php';
  $products = [
    new Product("avocado", "アボカド", 230, "./images/image_1.jpg"),
    new Product("orange", "オレンジ", 120, "./images/image_2.jpg"),
    new Product("lemon", "レモン", 200, "./images/image_3.jpg"),
    new Product("pnapple", "パイナップル", 300, "./images/image_4.jpg")
  ];
?>
