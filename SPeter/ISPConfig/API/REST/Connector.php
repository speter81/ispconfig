<?php
/**
 * Created by PhpStorm.
 * User: Pepe
 * Date: 2018. 05. 20.
 * Time: 10:59
 */

namespace SPeter\ISPConfig\API\REST;


class Connector
{
    protected $connection = NULL;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

}