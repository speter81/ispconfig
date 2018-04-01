<?php
namespace SPeter\ISPConfig\API\REST;

class Client extends Connection
{

    public function login($user, $pass)
    {
        $response = $this->call('login', ['username' => $user, 'password' => $pass, 'client_login' => false]);
        if ($response->successful()) {
            $this->sessionId = $response->response();
            return true;
        }
        return false;
    }

    public function logout()
    {
        $response = $this->call('logout', ['session_id' => $this->sessionId]);
        return $response->successful();
    }

    public function getClient($client)
    {
        if (is_numeric($client)) {
            $clientId = $client;
        } else {
            $clientId = ['username' => $client];
        }

        $response = $this->call('client_get', [
                'session_id' => $this->sessionId,
                'client_id' => $clientId
                ]
            );

        if ($response->successful()) {
            $clientData = $response->response();
            $data = end($clientData);
            if (is_array($data)) {
                $client = new Entity\Client;
                $client->fill($data);
                return $client;
            }
        }

        return $response->message();
    }

    public function addClient(Entity\Client $client, $resellerId = 0)
    {
        // resellerId  has to be 0 if the client shall not be assigned to admin or if the client is a reseller
        $params = $array = json_decode(json_encode($client), true);
        $response = $this->call('client_add', [
                'session_id' => $this->sessionId,
                'reseller_id' => $resellerId,
                'params' => $params
            ]
        );
        if ($response->successful()) {
            return $response->response();
        }

        throw new Exception($response->message());
    }

    public function updateClient(Entity\Client $client)
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
        $response = $this->call('client_update', [
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
        $response = $this->call('client_delete', [
                'session_id' => $this->sessionId,
                'client_id' => $clientId,
            ]
        );
        return $response->response();
    }

}
