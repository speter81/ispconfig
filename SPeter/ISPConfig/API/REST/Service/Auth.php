<?php
/**
 * Created by PhpStorm.
 * User: Pepe
 * Date: 2018. 05. 20.
 * Time: 10:38
 */

namespace SPeter\ISPConfig\API\REST\Service;
use SPeter\ISPConfig\API\REST\Connector;


class Auth extends Connector
{
    public function login($user, $pass)
    {
        $response = $this->connection->call('login', ['username' => $user, 'password' => $pass, 'client_login' => false]);
        if ($response->successful()) {
            return $response->response();
        }
        return false;
    }

    public function logout($sessionId)
    {
        $response = $this->connection->call('logout', ['session_id' => $sessionId]);
        return $response->successful();
    }
}