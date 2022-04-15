<?php

$base_template = file_get_contents("../base-template.html");
$main_content = file_get_contents("../contacts-content.html");

$main_content = str_replace("{main}", $main_content, $base_template);

$title = "Contacts";
$main_content = str_replace("{title}", $title, $main_content);

echo $main_content;