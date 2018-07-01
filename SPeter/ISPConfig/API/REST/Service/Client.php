<?php
namespace SPeter\ISPConfig\API\REST\Service;
use SPeter\ISPConfig\API\REST\Session;
use SPeter\ISPConfig\API\REST\Entity\Client as ClientEntity;
use SPeter\ISPConfig\API\REST\Exception\GeneralRESTException;

class Client extends Session
{

    public function get($client)
    {
        $clientId = ['username' => $client];
        $response = $this->connection->call('client_get', [
                'session_id' => $this->sessionId,
                'client_id' => $clientId
                ]
            );

        if ($response->successful()) {
            $clientData = $response->response();
            $data = end($clientData);
            if (is_array($data)) {
                $client = new ClientEntity;
                $client->fill($data);
                return $client;
            }
        }

        return $response->message();
    }

    public function add(ClientEntity $client, $resellerId = 0)
    {
        // resellerId  has to be 0 if the client shall not be assigned to admin or if the client is a reseller
        $params = $array = json_decode(json_encode($client), true);
        $response = $this->connection->call('client_add', [
                'session_id' => $this->sessionId,
                'reseller_id' => $resellerId,
                'params' => $params
            ]
        );
        if ($response->successful()) {
            return $response->response();
        }

        throw new GeneralRESTException($response->message());
    }

    public function update(ClientEntity $client)
    {
        // Remove password and SSH keys because we don!t want to update it
        $client->setPassword('');
        if (isset($client->id_rsa)) {
            unset($client->id_rsa);
        }
        if (isset($client->ssh_rsa)) {
            unset($client->ssh_rsa);
        }

        $resellerId = $client->getParentClientId();

        $params = $array = json_decode(json_encode($client), true);
        $response = $this->connection->call('client_update', [
                'session_id' => $this->sessionId,
                'client_id' => $client->getClientId(),
                'reseller_id' => $resellerId,
                'params' => $params
            ]
        );

        return $response->response();
    }

    public function delete($clientId)
    {
        $response = $this->connection->call('client_delete', [
                'session_id' => $this->sessionId,
                'client_id' => $clientId,
            ]
        );
        return $response->response();
    }

    public function getSites(ClientEntity $client)
    {
        $response = $this->connection->call('client_get_sites_by_user', [
                'session_id' => $this->sessionId,
                'sys_userid' => $client->getSysUserid(),
                'sys_groupid' => $client->getSysGroupid()
            ]
        );

        if ($response->successful()) {
            $responseData = $response->response();
            if (is_array($responseData)) {
                $results = [];
                foreach ($responseData as $data) {
                    $entity = new \SPeter\ISPConfig\API\REST\Entity\WebDomain;
                    $entity->fill($data);
                    $results[] = $entity;
                }
                return $results;
            }
        }

        return $response->message();
    }

    public function getTemplates()
    {
        $response = $this->connection->call('client_templates_get_all', [
                'session_id' => $this->sessionId
            ]
        );

        if ($response->successful()) {
            $responseData = $response->response();
            if (is_array($responseData)) {
                $results = [];
                foreach ($responseData as $data) {
                    $entity = new \SPeter\ISPConfig\API\REST\Entity\Template;
                    $entity->fill($data);
                    $results[] = $entity;
                }
                return $results;
            }
        }

        return $response->message();

    }

    public function getId($userId)
    {
        $response = $this->connection->call('client_get_id', [
                'session_id' => $this->sessionId,
                'sys_userid' => $userId
            ]
        );

        if ($response->successful()) {
            return $response->response();
        }

        return $response->message();
    }

    public function allId()
    {
        $response = $this->connection->call('client_get_all', [
                'session_id' => $this->sessionId,
            ]
        );

        if ($response->successful()) {
            return $response->response();
        }
        return $response->message();
    }

    public function getById($clientId)
    {
        $response = $this->connection->call('client_get', [
                'session_id' => $this->sessionId,
                'client_id' => $clientId
            ]
        );

        if ($response->successful()) {
            $clientData = $response->response();
            if (is_array($clientData)) {
                $client = new ClientEntity;
                $client->fill($clientData);
                return $client;
            }
        }

        return $response->message();
    }

}
