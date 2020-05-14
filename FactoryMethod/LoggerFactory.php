<?php

class LoggerFactory
{
    public function create(string $type): LoggerInterface
    {
        if ($type === 'F') {
            return new FileLogger();
        } elseif ($type === 'S') {
            return new StdoutLogger();
        }

        throw new InvalidArgumentException('Type does not exist');
    }
}