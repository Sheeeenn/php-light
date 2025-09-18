<?php 

namespace Source;

use App\Controllers;

class Route {
    public static function Links(array $links) {

        $url = $_SERVER['REQUEST_URI'];

        if ($url !== "/") {

            $url = rtrim($url, "/");

        }

        foreach ($links as $link) {

            if($url == $link[0]) {
                
                $location = $link[1];

                if (is_string($location)) { 

                    if (method_exists(Controllers::class, $location)) {
    
                        Controllers::$location();

                    } else {

                        echo "No controller named '" . $location ."' was found." ;

                    }

                }

                break;

            }

        }

        return;
    }
}

