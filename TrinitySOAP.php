<?php

class TrinityCoreSoapClient
{
    private $client;

    /**
     * Constructor to initialize the SOAP client using config data.
     *
     * @param array $config Configuration array with 'host', 'port', 'username', and 'password'.
     */
    public function __construct(array $config)
    {
        $url = "http://{$config['host']}:{$config['port']}";
        try {
            $this->client = new SoapClient(null, [
                'location' => $url,
                'uri' => 'urn:TC',
                'login' => $config['username'],
                'password' => $config['password'],
            ]);
        } catch (Exception $e) {
            die('SOAP Client initialization failed: ' . $e->getMessage());
        }
    }

    /**
     * Executes a command on the server.
     *
     * @param string $command The command to execute.
     * @return mixed The result from the server.
     */
    public function executeCommand($command)
    {
        try {
            return $this->client->executeCommand(new SoapParam($command, 'command'));
        } catch (Exception $e) {
            return 'Error executing command: ' . $e->getMessage();
        }
    }
}
