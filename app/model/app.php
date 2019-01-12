<?php

namespace app\model;

use core\mvc\model;

class app extends model {

    public function get() {
        $string = 'This is model data of \'app\' module.';
        return $this->data($string);
    }

}
