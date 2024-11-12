<?php

// Load SOAP configuration data from the specified file
$config = require 'soap_data.php';

// Extract Trinity Core configuration data
$soapConfig = $config['trinity'];

// Initialize the TrinityCoreSoapClient with configuration
$soapClient = new TrinityCoreSoapClient($soapConfig);
