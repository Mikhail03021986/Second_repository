<?php ### Базовый набор для шаблона Singleton
namespace Conn;
    trait BasicSet 
    {
        private static $instance;
        public final static function getInstance() :object
            {
                if (!self::$instance) {
                    $classname = __CLASS__;
                    $instance = new $classname;    
                }
                return $instance;
            }
        private final function __clone() {}
        private final function __wakeup() {}
    }

