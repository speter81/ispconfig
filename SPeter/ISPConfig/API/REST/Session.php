<?php
namespace SPeter\ISPConfig\API\REST;
/**
 * Created by PhpStorm.
 * User: Pepe
 * Date: 2018. 05. 20.
 * Time: 11:32
 */
class Session extends Connector
{
    protected $sessionId = NULL;

    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }

    public function getSessionId()
    {
        return $this->sessionId;
    }
}