<?php
require __DIR__ . '/loader.php';
require __DIR__ . '/includes/Pda/PdaCustomServer.php';
$server = new PdaCustomServer();
$server->handleRequest();