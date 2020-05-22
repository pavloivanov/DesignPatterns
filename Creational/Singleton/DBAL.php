<?php

final class DBAL extends PDO
{
    private static $dbal;

    private function __construct(array $settings) {
        $dns = $settings['database']['driver'] .
            ':host=' . $settings['database']['host'] .
            ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
            ';dbname=' . $settings['database']['schema'];

        parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
    }

    private function __clone() {}

    private function __sleep() {}

    private function __wakeup() {}

    public static function getConnection(array $settings = null) {
        if(!static::$dbal) {
            static::$dbal = new static($settings);
        }

        return static::$dbal;
    }
}

$settings = ['database' =>
    [
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => 3306,
        'schema' => 'my_db',
        'username' => 'john',
        'password' => 'doe'
    ]
];

$conn = DBAL::getConnection($settings);

