<?php

namespace core\mvc;

/**
 * 控制器基类
 */
class controller {

    /**
     * 视图类实例
     * @var object
     */
    protected $view;

    public function __construct() {
        // 实例化视图类
        $this->view = View::instance();
    }

    /**
     * 加载视图
     * @param  string $view   视图文件
     * @param  array  $params 模版变量
     * @return boolean
     */
    public function layout($view = '', $params = []) {
        return $this->view->layout($view, $params);
    }

}
