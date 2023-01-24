<?php

session_start();    

$base_template = file_get_contents("../base-template.html");
$main_content = file_get_contents("../contacts-content.html");

$main_content = str_replace("{main}", $main_content, $base_template);

$title = "Contacts";
$main_content = str_replace("{title}", $title, $main_content);

$header_links = "";
if ((isset($_SESSION['Name']))) {

    $login=$_SESSION['Name'];
    $header_links=str_replace("{login}", $login, file_get_contents("../profile-link.html"));
}else{

    $header_links=file_get_contents("../header-links.html");
}

$main_content=str_replace("{header-links}", $header_links, $main_content);

echo $main_content;