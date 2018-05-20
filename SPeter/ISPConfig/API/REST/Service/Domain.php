<?php
namespace SPeter\ISPConfig\API\REST\Service;
use SPeter\ISPConfig\API\REST\Session;
use SPeter\ISPConfig\API\REST\Entity\Domain as DomainEntity;
use SPeter\ISPConfig\API\REST\Entity\Client as ClientEntity;

class Domain extends Session
{
    public function get($domainId)
    {
        $response = $this->connection->call('domains_domain_get', [
                'session_id' => $this->sessionId,
                'domain_id' => $domainId
            ]
        );

        if ($response->successful()) {
            $responseData = $response->response();
            if (is_array($responseData)) {
                $entity = new DomainEntity;
                $entity->fill($responseData);
                return $entity;
            }
        }

        return $response->message();
    }

    public function add(DomainEntity $domain, ClientEntity $client)
    {
        $params = [
            'session_id' => $this->sessionId,
            'client_id' => $client->getClientId(),
            'params' => [
                'domain' => $domain->getDomain()
            ]
        ];
        $response = $this->connection->call('domains_domain_add', $params);
        if($response->successful()) {
            return true;
        }
        return $response->message();
    }

    public function delete()
    {

    }

    public function getAllByUser(ClientEntity $client)
    {

        $response = $this->connection->call('domains_get_all_by_user', [
                'session_id' => $this->sessionId,
                'group_id' => $client->getSysGroupid()
            ]
        );

        if ($response->successful()) {
            $responseData = $response->response();
            if (is_array($responseData)) {
                $results = [];
                foreach ($responseData as $data) {
                    $entity = new DomainEntity;
                    $entity->fill($responseData);
                    $results[] = $entity;
                }
                return $results;
            }
        }

        return $response->message();
    }
}
