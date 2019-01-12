<?php

namespace core\handler;

class error extends \Error {

    public function handle($code, $message, $file, $line) {
        echo $message . ' in ' . $file . ':' . $line . ' with code ' . $code;
        exit;
    }
}
