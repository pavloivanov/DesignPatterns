<?php

abstract class AbstractOutputFactory {
    abstract public function getHeader();
    abstract public function getBody();
    abstract public function getHtmlConverter();
}