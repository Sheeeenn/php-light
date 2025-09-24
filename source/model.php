<?php

namespace Source;

class Model {

    protected static $column = []; 

    public static function setColumn(array $cols) {

        self::$column = $cols;

        // $Database = require(__DIR__ . "/../config/config.php");

        // echo var_dump(array_values(self::$column)[0]); 

        foreach ($cols as $col => $value) {
            echo $col . " " . $value[0];
        }

    }

    public static function char(int $len) {
        
        return $len;
    }


}

?>