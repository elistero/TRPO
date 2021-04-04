<?php
namespace Krauskeite;


use core\LogAbstract;

use core\LogInterface;



Class MyLog extends LogAbstract implements LogInterface {
public function _log(String $str){
$this->log[]=$str;
}

    
/**
     * @param String $str строка для записи в массив лога
  */
    
public function _write()
    {
        
$b = date('d-m-Y\_H.i.s.u');

        
foreach ($this->log as $v){
            
echo $v . "\r\n";

            
file_put_contents(__DIR__ . "\..\log\\$b.log", trim($v."\r\n") . PHP_EOL, FILE_APPEND);
        
}


    }

    
public static function log($str)
    {

self::Instance()->_log($str);
    
}

    
public function _log($str)
    {

$this->log[] = $str;

}

    
public static function write()
    {

self::Instance()->_write();
    
}
}
?>