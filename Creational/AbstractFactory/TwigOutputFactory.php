<?php

class TwigOutputFactory extends AbstractOutputFactory
{

    public function getHeader()
    {
        return new TwigHeader();
    }

    public function getBody()
    {
        return new TwigBody();
    }

    public function getHtmlConverter()
    {
        return new TwigToHtmlConverter();
    }
}