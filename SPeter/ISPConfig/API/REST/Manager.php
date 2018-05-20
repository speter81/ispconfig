<?php
/**
 * Created by PhpStorm.
 * User: Pepe
 * Date: 2018. 05. 20.
 * Time: 10:43
 */

namespace SPeter\ISPConfig\API\REST;

use SPeter\ISPConfig\API\REST\Entity\Client as ClientEntity;
use SPeter\ISPConfig\API\REST\Entity\Domain as DomainEntity;
use SPeter\ISPConfig\API\REST\Entity\WebDomain as WebDomainEntity;

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
        $service = $this->getService('Auth');
        $this->sessionId = $service->login($username, $password);
        return ! empty($this->sessionId);
    }

    public function logout()
    {
        $service = $this->getService('Auth');
        return $service->logout($this->sessionId);
    }

    public function getClient($username)
    {
        $service = $this->getService('Client');
        return $service->get($username);
    }

    public function addClient(ClientEntity $client, $resellerId = 0)
    {
        $service = $this->getService('Client');
        return $service->add($client, $resellerId);
    }

    public function updateClient(ClientEntity $client)
    {
        $service = $this->getService('Client');
        return $service->update($client);

    }

    public function deleteClient($clientId)
    {
        $service = $this->getService('Client');
        return $service->delete($clientId);
    }

    public function getClientSites(ClientEntity $client)
    {
        $service = $this->getService('Client');
        return $service->getSites($client);
    }

    public function getTemplates()
    {
        $service = $this->getService('Client');
        return $service->getTemplates();
    }


    public function getWebDomain($domainId)
    {
        $service = $this->getService('Site');
        return $service->getWebDomain($domainId);
    }

    public function addWebDomain(ClientEntity $client, WebDomainEntity $webDomain)
    {
        $service = $this->getService('Site');
        return $service->addWebDomain($client, $webDomain);
    }



    public function getDomain($domainId)
    {
        $service = $this->getService('Domain');
        return $service->get($domainId);
    }

    public function addDomain(DomainEntity $domain, ClientEntity $client)
    {
        $service = $this->getService('Domain');
        return $service->add($domain, $client);
    }

    public function getAllDomainByUser(ClientEntity $client)
    {
        $service = $this->getService('Domain');
        return $service->getAllByUser($client);
    }




    public function getServerByID($serverId)
    {
        $service = $this->getService('Server');
        return $service->get($serverId);
    }

    public function getServerIdByIP($ipv4Address)
    {
        $service = $this->getService('Server');
        return $service->getServerIdByIP($ipv4Address);
    }

}