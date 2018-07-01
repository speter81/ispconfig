<?php
namespace SPeter\ISPConfig\API\REST\Service;
use SPeter\ISPConfig\API\REST\Entity\WebDomain;
use SPeter\ISPConfig\API\REST\Session;
use SPeter\ISPConfig\API\REST\Entity\Client as ClientEntity;
use SPeter\ISPConfig\API\REST\Exception\GeneralRESTException;

class Site extends Session
{

    public function getCron($client)
    {

    }

    public function addCron(ClientEntity $client, $resellerId = 0)
    {

    }

    public function updateCron(ClientEntity $client)
    {

    }

    public function deleteCron($clientId)
    {

    }


    public function getDatabase()
    {

    }

    public function addDatabase()
    {

    }

    public function updateDatabase()
    {

    }

    public function deleteDatabase()
    {

    }


    public function getDatabaseUser()
    {

    }

    public function addDatabaseUser()
    {

    }

    public function updateDatabaseUser()
    {

    }

    public function deleteDatabaseUser()
    {

    }


    public function getFTPUser()
    {

    }

    public function addFTPUser()
    {

    }

    public function updateFTPUser()
    {

    }

    public function deleteFTPUser()
    {

    }

    public function getWebDomain($domainId)
    {
        $response = $this->connection->call('sites_web_domain_get', [
                'session_id' => $this->sessionId,
                'primary_id' => $domainId
            ]
        );

        if ($response->successful()) {
            $responseData = $response->response();
            $site = new \SPeter\ISPConfig\API\REST\Entity\WebDomain();
            if (is_array($responseData)) {
                $site->fill($responseData);
                return $site;
            }
        }

        return $response->message();
    }

    public function addWebDomain(ClientEntity $client, WebDomain $webDomain)
    {
        $apiParams = [
            'session_id' => $this->sessionId,
            'client_id' => $client->getClientId(),
            'params'    => $webDomain->getParams()
        ];

        $response = $this->connection->call('sites_web_domain_add', $apiParams);
        if ($response->successful()) {
            return true;
        }

        return $response->message();
    }

    public function updateWebDomain(ClientEntity $client, $domainId, WebDomain $webDomain)
    {
        $apiParams = [
            'session_id' => $this->sessionId,
            'client_id' => $client->getClientId(),
            'domain_id' => $domainId,
            'params' => $webDomain->getParams()
        ];

        $response = $this->connection->call('sites_web_domain_update', $apiParams);
        if ($response->successful()) {
            return true;
        }
        return $response->message();
    }

    public function deleteWebDomain()
    {

    }

    public function getAllWebDomains($userId)
    {
        $apiParams = [
            'session_id' => $this->sessionId,
            'sys_userid' => $userId
        ];

        $response = $this->connection->call('client_get_sites_by_user', $apiParams);

        if ($response->successful()) {
            $responseData = $response->response();
            return $responseData;
        }
        return $response->message();

    }

}