<?php
/**
 * Created by PhpStorm.
 * User: Pepe
 * Date: 2018. 05. 20.
 * Time: 16:25
 */

namespace SPeter\ISPConfig\API\REST\Entity;


class Template extends Base
{

    public function getParams()
    {
        return $this->params;
    }

    public function __set($key, $value)
    {
        $this->params[$key] = $value;
    }

    public function __call($method, $args = [])
    {
        if (preg_match('/set/',$method)) {
            $stripped = preg_replace('/set/', '', $method);
            $key = $this->deCamelize($stripped);
            if (array_key_exists($key ,$this->params)) {
                $this->$key = $args[0];
                return $this;
            }
        } else if (preg_match('/get/', $method)) {
            $stripped = preg_replace('/get/', '', $method);
            $key = $this->deCamelize($stripped);
            if (array_key_exists($key ,$this->params)) {
                return $this->params[$key];
            }
        }
    }

}