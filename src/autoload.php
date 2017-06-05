<?php
/**
 * Created by daigangbo.
 * User: daigangbo daigangbo@gmail.com
 * Date: 2017/6/5
 * Time: 14:03
 */

include __DIR__ . '/../vendor/autoload.php';

function myAutoLoader($className)
{
    $root = strpos($className, '\\');
    if (($root !== false) && (substr($className, 0, $root) == 'src')) {
        $classFile = __DIR__ . '/../' . str_replace('\\', '/', $className) . '.php';
        include($classFile);
    }
}

spl_autoload_register('myAutoLoader', true, true);