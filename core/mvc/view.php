<?php

namespace core\mvc;

/**
 * 视图类
 */
class view {

    /**
     * 本类实例
     * @var object
     */
    private static $instance;

    private function __construct() {}

    /**
     * 外部获取本类实例
     * @return object 类实例
     */
    public static function instance() {
        if (!self::$instance)
            self::$instance = new self();
        return self::$instance;
    }

    /**
     * 加载视图
     * @param  string $file   视图文件
     * @param  array $params  模版变量
     * @return boolean
     */
    public function layout($file, $params) {
        if (!empty($params))
            extract($params);
        return require $file . '.php';
    }

}
