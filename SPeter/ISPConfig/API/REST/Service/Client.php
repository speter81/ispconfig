<?php
namespace SPeter\ISPConfig\API\REST\Service;
use SPeter\ISPConfig\API\REST\Session;
use SPeter\ISPConfig\API\REST\Entity\Client as ClientEntity;
use SPeter\ISPConfig\API\REST\Exception\GeneralRESTException;

class Client extends Session
{

    public function getClient($client)
    {
        if (is_numeric($client)) {
            $clientId = $client;
        } else {
            $clientId = ['username' => $client];
        }

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

    public function addClient(ClientEntity $client, $resellerId = 0)
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

    public function updateClient(ClientEntity $client)
    {
        // Remove password and SSH keys because we don!t want to update it
        $client->password = '';
        if (isset($client->id_rsa)) {
            unset($client->id_rsa);
        }
        if (isset($client->ssh_rsa)) {
            unset($client->ssh_rsa);
        }

        $resellerId = $client->parent_client_id;

        $params = $array = json_decode(json_encode($client), true);
        $response = $this->connection->call('client_update', [
                'session_id' => $this->sessionId,
                'client_id' => $client->client_id,
                'reseller_id' => $resellerId,
                'params' => $params
            ]
        );

        return $response->response();
    }

    public function deleteClient($clientId)
    {
        $response = $this->connection->call('client_delete', [
                'session_id' => $this->sessionId,
                'client_id' => $clientId,
            ]
        );
        return $response->response();
    }

}
