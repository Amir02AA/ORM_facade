<?php

namespace classes;
class ORMFacade
{
    private static ?SqlQueryBuilder $builder = null;

    private static function setBuilder()
    {

        if (is_null(self::$builder)) {
            $config = [
                'dsn' => 'mysql:host=localhost;dbname=orm_facade',
                'user' => 'root',
                'password' => ''
            ];
            $pdo = new PDO($config['dsn'],$config['user'],$config['password']);
            self::$builder = new SqlQueryBuilder($pdo);
        }
    }

    public static function __callStatic(string $name, array $arguments)
    {

        $arr = preg_split('/(?=[A-Z])/', $name);

        $crud = $arr[0];
        $table = strtolower($arr[1]) . "s";
    }
}