<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $_POST['info']; 

    $patterns = array(
        '/\.{1,3}|[?!]/um',
        '/\d/um',
        '/[\s]{2,}/um',
        '/([A-ZА-Я]){2,}/um'
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