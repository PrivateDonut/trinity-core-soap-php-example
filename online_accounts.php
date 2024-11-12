<?php

// Include the TrinityCoreSoapClient class and the config loader
require_once 'TrinitySOAP.php';
require_once 'config/soap_config_loader.php';

// Run a command and display the result
$result = $soapClient->executeCommand('account onlinelist');

// format results
echo '<pre>';
echo $result;
echo '</pre>';
