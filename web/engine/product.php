<?php

$base_template = file_get_contents("../base-template.html");
$main_content = file_get_contents("../product-content.html");
$table_row = file_get_contents("../table-row.html");
$diagram = file_get_contents("../product-diagram.html");

$main_content = str_replace("{main}", $main_content, $base_template);

$objects = array("Designer(s)", 
        "Publisher(s)", 
        "Players", 
        "Play Time", 
        "Suggested Age"
    );

$values = array("Error, Marc André", 
        "Error, Z-Man Games, Space Cowboys, Filosofia Éditions, Boardgame Space, Asmodee, JD Éditions", 
        "2-4, Best With 3", 
        "Filler - Under 30 Minutes", 
        "10+"
    ); 
        
$features = array("Complexity", "Component quality", "Player interaction");
$percentages = array("80", "60", "80");

$product_info = "";
for ($i = 1; $i < 6; $i++) {
    $current_row = "";
    $current_row = str_replace("{obj}", $objects[$i-1], $table_row);
    $current_row = str_replace("{val}", $values[$i-1], $current_row);
    $product_info = $product_info.$current_row;
}

$product_features = "";
for ($i = 1; $i < 4; $i++) {
    $current_feature = "";
    $current_feature = str_replace("{feature}", $features[$i-1], $diagram);
    $current_feature = str_replace("{percentage}", $percentages[$i-1], $current_feature);
    $product_features = $product_features.$current_feature;
}

$title = "Product-card";
$main_content = str_replace("{title}", $title, $main_content);
$main_content = str_replace("{product-info}", $product_info, $main_content);
$main_content = str_replace("{product-diagrams}", $product_features, $main_content);

echo $main_content;