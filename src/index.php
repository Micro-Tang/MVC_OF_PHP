<?php
    /**
     * @file index.php
     * @author 唐堃
     * @date 2016/12/23 下午3:32
     * @description:
     */
    
    // 应用目录为当前目录
    define('APP_PATH', __DIR__.'/');
    
    // 开启调试模式
    define('APP_DEBUG', true);
    
    // 网站根URL
    define('APP_URL', 'http://localhost/MVC_OF_PHP/src');
    
    // 加载框架
    require './fastphp/fastphp.php';