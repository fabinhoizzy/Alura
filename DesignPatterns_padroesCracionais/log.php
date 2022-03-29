<?php

use Alura\DesignPattern\Log\{StdoutLogManager, FileLogManager};

require_once 'vendor/autoload.php';

$logManager = new StdoutLogManager();
$logManager->log('info', 'Testando log manager');