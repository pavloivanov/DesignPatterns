<?php

abstract class AbstractConverter
{
    abstract public function render(AbstractBody $body, AbstractHeader $header);
}