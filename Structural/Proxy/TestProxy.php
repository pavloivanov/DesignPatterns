<?php

require_once 'Subject.php';
require_once 'RealSubject.php';
require_once 'Proxy.php';

function clientCode(Subject $subject) {
    $subject->request();
}

echo "Client: Executing the client code with a real subject:\n";
$realSubject = new RealSubject();
clientCode($realSubject);

echo "\n";

echo "Client: Executing the same client code with a proxy:\n";
$proxy = new Proxy($realSubject);
clientCode($proxy);