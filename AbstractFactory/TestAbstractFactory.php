<?php

$twigOutputFactory = new TwigOutputFactory();

$header = $twigOutputFactory->getHeader();
$body = $twigOutputFactory->getBody();
$htmlConverter = $twigOutputFactory->getHtmlConverter();

$header->initScripts();
$body->setContent();

$htmlConverter->render($body, $header);