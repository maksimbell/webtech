<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $_POST['info']; 

    $patterns = array(
        '/\.{1,3}|[?!]/um',
        '/\b[\d]{1,}[,\/]?[\d]{0,}\b/um',
        '/[\s]{2,}/um',
        '/\b([A-ZА-Я]){2,}\b/um'
    );

    $replacements = array(
        '$0<br>',
        '<font size="4px" color="blue">$0</font>',
        '$0',
        '<abbr style="border-bottom: 3px dashed green">$0</abbr>'
    );
    
    $processed_message = preg_replace($patterns, $replacements, $message);

    echo $processed_message;
}
?>