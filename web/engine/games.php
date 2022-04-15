<?php

$base_template = file_get_contents("../base-template.html");
$main_content = file_get_contents("../main-content.html");
$products_slide = file_get_contents("../products-slide.html");
$product_card = file_get_contents("../product-card.html");

$main_content = str_replace("{main}", $main_content, $base_template);

$slides = "";
for ($i = 0; $i < 4; $i++) {
    $current_slide = "";
    $current_slide = str_replace("{id}", $i, $products_slide);
    $current_slide = str_replace("{prev}", ($i+3)%4, $current_slide);
    $current_slide = str_replace("{next}", ($i+1)%4, $current_slide);
    $slides = $slides.$current_slide;
}

$main_content = str_replace("{slides}", $slides, $main_content);

$title = "Board games";

$names = array("Dune: Imperium", 
        "7 Wonders: Duel", 
        "7 Wonders 2nd Edition", 
        "7 Wonders Duel: Agora Expansion", 
        "Jenga", 
        "Patchwork", 
        "Cluedo The Classic Mystery Game", 
        "Carcassonne (2015)"
    );

$prices = array("19", "22", "21", "13", "33", "17", "26", "30");

$products = "";
for ($i = 1; $i < 9; $i++) {
    $current_product = "";
    $current_product = str_replace("{id}", $i, $product_card);
    $current_product = str_replace("{name}", $names[$i-1], $current_product);
    $current_product = str_replace("{price}", $prices[$i-1], $current_product);
    $products = $products.$current_product;
}

$main_content = str_replace("{products}", $products, $main_content);
$main_content = str_replace("{title}", $title, $main_content);

echo $main_content;