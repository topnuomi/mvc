<?php

namespace core;

/**
 * 类自动加载
 */
class autoload {

    /**
     * 已加载过的文件
     * @var array
     */
    private $files = [];

    /**
     * 自动加载方法
     * @param  string $class 类名
     * @return boolean
     */
    public function load($class) {
        $classname = str_replace('\\', '/', $class);
        $classname = BASEPATH . $classname;
        if (!isset($this->files[$classname])) {
            $this->files[$classname] = $classname . '.php';
            require $this->files[$classname];
        }
        return true;
    }
}
