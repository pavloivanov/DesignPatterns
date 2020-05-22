<?php

$loggerFactory = new LoggerFactory();

$logger = $loggerFactory->create('S');

$logger->log('Hello world');