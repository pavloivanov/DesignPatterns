<?php

class FileLogger implements LoggerInterface
{
    public function log(string $message): void {
        echo 'Log message to FileLogger:' . $message;
    }
}