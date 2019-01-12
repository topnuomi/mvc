<?php
require 'autoload.php';
use core\autoload;
use core\handler\exception;
use core\handler\error;
// 注册自动加载方法
spl_autoload_register([new autoload(), 'load']);
// 指定异常处理方法
set_exception_handler([new exception(), 'handle']);
// 指定错误处理方法
set_error_handler([new error(), 'handle']);
