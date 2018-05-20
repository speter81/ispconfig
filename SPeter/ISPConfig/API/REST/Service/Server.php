<?php
namespace SPeter\ISPConfig\API\REST\Service;
use SPeter\ISPConfig\API\REST\Session;
use SPeter\ISPConfig\API\REST\Entity\Client as ClientEntity;
use SPeter\ISPConfig\API\REST\Exception\GeneralRESTException;

class Server extends Session
{

    public function get($serverId)
    {
        $response = $this->connection->call('server_get', [
                'session_id' => $this->sessionId,
                'server_id' => $serverId
            ]
        );

        if ($response->successful()) {
            $responseData = $response->response();
            if (is_array($responseData)) {
                $entity = new \SPeter\ISPConfig\API\REST\Entity\Server;
                $entity->fill($responseData);
                return $entity;
            }
        }

        return $response->message();
    }

    public function getServerIdByIP($ipv4Address)
    {
        $response = $this->connection->call('server_get_serverid_by_ip', [
                'session_id' => $this->sessionId,
                'ipaddress' => $ipv4Address
            ]
        );

        if ($response->successful()) {
            $responseData = $response->response();
            if (is_array($responseData) && array_key_exists('server_id', $responseData)) {
                return $responseData['server_id'];
            }
        }

        return $response->message();
    }




}