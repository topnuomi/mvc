<?php

namespace core\handler;

class exception extends \Exception {

    public function handle($e) {
        echo $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
        exit;
    }
}
