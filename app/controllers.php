<?php

namespace App;

class Controllers {
    public static function splash() {

        $data = [
            "name" => "Justin Sheen", 
            "race" => "Brown", 
            "items" => ["gun", "knife"]
        ];

        return render("phplight",$data);

    }
}