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
                'params' => [
                    'domain_id' => $domainId
                    ]
            ]
        );

        if ($response->successful()) {
            $responseData = $response->response();
            if (is_array($responseData)) {
                $results = [];
                foreach ($responseData as $key => $siteData) {
                    $site = new \SPeter\ISPConfig\API\REST\Entity\WebDomain();
                    $site->fill($siteData);
                    $results[] = $site;
                }
                return $results;
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

        $response = $this->connection->call('sites_web_domain_get', $apiParams);
        if ($response->successful()) {
            return true;
        }

        return $response->message();
    }

    public function updateWebDomain()
    {

    }

    public function deleteWebDomain()
    {

    }

}