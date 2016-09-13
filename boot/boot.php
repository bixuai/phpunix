<?php
define('G_ROOT', substr(dirname(__FILE__), 0, -4)); //路径末尾有/
//自动加载实现
spl_autoload_register(array('boot', 'autoload'));

//异常处理

//子应用优先处理的一些逻辑
init_apps::init();

//配置文件按需加载

//初始化全局变量

//路由

class boot {
   static function autoload($class) {
       
       if (class_exists($class)) return ;
       
       $class = strtolower($class);
       if(strpos($class, '_') !== false) {
           list($folder) = explode('_', $class);
           $file = G_ROOT.$folder.'/'.$class.'.php';
           include $file;
       }
      
    }
}