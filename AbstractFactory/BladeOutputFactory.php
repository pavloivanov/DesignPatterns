<?php

class BladeOutputFactory extends AbstractOutputFactory
{
    public function getHeader()
    {
        // TODO: Implement getHeader() method.
    }

    public function getBody()
    {
        // TODO: Implement getBody() method.
    }

    public function getHtmlConverter()
    {
        return new BladeToHtmlConverter();
    }
}