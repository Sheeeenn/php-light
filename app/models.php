<?php 

use Source\Model;

Class User extends Model {
    public function __construct() { 

        parent::setColumn ([
            "name" => [parent::char(255)],
        ]);

    }

}


?>