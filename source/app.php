<?php 

function render($name, $data = []) {

    $pathnlight = __DIR__ . "/../app/views/" . $name . ".php";

    if(file_exists($pathnlight)) {

        extract($data);

        include($pathnlight);

    } else {

        echo "File named '" . $name . "' in views doesn't exist.";

    }

}