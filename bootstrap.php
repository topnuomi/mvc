<?php
// 项目根目录
define('BASEPATH', __DIR__ . '/');
// 加载初始化文件
require 'core/init.php';

// 模拟访问位置
$object = new \app\controller\app();
$object->index();
