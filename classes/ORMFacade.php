<?php

namespace classes;
class ORMFacade
{
    public static function __callStatic(string $name, array $arguments)
    {
        $arr = preg_split('/(?=[A-Z])/',$name);

        $crud = $arr[0];
        $table = strtolower($arr[1])."s";
    }
}