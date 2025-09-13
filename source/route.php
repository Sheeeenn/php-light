<?php 


namespace Source;

class Route {
    public static function Links(array $links) {

        $url = $_SERVER['REQUEST_URI'];

        if ($url !== "/") {

            $url = rtrim($url, "/");

        }

        foreach ($links as $link) {

            if($url == $link[0]) {

                echo "Is There!";
                break;
            }

        }

        return;
    }
}

