<?php 

function render($name) {

    $path = __DIR__ . "/../app/views/" . $name . ".php";

    if(file_exists($path)) {

        include(__DIR__ . "/../app/views/" . $name . ".php");

    } else {

        echo "File named '" . $name . "' in views doesn't exist.";

    }

}