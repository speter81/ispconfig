<?php
/**
 * Created by PhpStorm.
 * User: Pepe
 * Date: 2018. 05. 20.
 * Time: 10:43
 */

namespace SPeter\ISPConfig\API\REST;

use SPeter\ISPConfig\API\REST\Entity\Client;

class Manager
{
    protected $sessionId = NULL;

    private $services = [],
            $connection = NULL;

    public function __construct($url)
    {
        $this->connection = new Connection($url);
    }

    public function getService($serviceName)
    {
        if ( ! array_key_exists($serviceName, $this->services)) {
            $className = sprintf('\SPeter\ISPConfig\API\REST\Service\%s', $serviceName);
            if (class_exists($className)) {
                $this->services[$serviceName] = new $className($this->connection);
                if ($this->services[$serviceName] instanceof Session) {
                    $this->services[$serviceName]->setSessionId($this->sessionId);
                }
            } else {
                throw new \SPeter\ISPConfig\API\REST\Exception\InvalidServiceException('Unknown service: '.$serviceName);
            }
        }
        return $this->services[$serviceName];
    }

    public function login($username, $password)
    {
        $auth = $this->getService('Auth');
        $this->sessionId = $auth->login($username, $password);
        return ! empty($this->sessionId);
    }

    public function logout()
    {
        $auth = $this->getService('Auth');
        return $auth->logout($this->sessionId);
    }

    public function getClient($username)
    {
        $clientService = $this->getService('Client');
        return $clientService->getClient($username);
    }

    public function addClient(Client $client, $resellerId = 0)
    {
        $clientService = $this->getService('Client');
        return $clientService->addClient($client, $resellerId);
    }

    public function updateClient(Client $client)
    {
        $clientService = $this->getService('Client');
        return $clientService->updateClient($client);

    }

    public function deleteClient($clientId)
    {
        $clientService = $this->getService('Client');
        return $clientService->deleteClient($clientId);
    }

}