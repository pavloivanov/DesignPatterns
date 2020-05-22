<?php

final class Logger {
    private static $logger;

    private function __construct() {}
    private function __clone() {}
    private function __sleep() {}
    private function __wakeup() {}

    public static function getInstance() {
        if (!self::$logger) {
            return new self();
        }

        return self::$logger;
    }
}

Logger::getInstance();