<?php
/**
 * Created by PhpStorm.
 * User: Pepe
 * Date: 2018. 05. 20.
 * Time: 12:12
 */

namespace SPeter\ISPConfig\API\REST\Entity;


class Base
{
    protected $params = [];

    public function fill($data)
    {
        if (is_array($data)) {
            foreach($data as $key => $value) {
                $this->$key = $data[$key];
            }
            return $this;
        }
        throw new \InvalidArgumentException('Provided argument is not an array');
    }

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

    private function getSetterName($member)
    {
        $spaced = preg_replace('/_/', ' ', strtolower($member));
        return 'set'.preg_replace('/ /', '', ucwords($spaced));
    }

    protected function deCamelize($input)
    {
        return ltrim(strtolower(preg_replace('/[A-Z]([A-Z](?![a-z]))*/', '_$0', $input)), '_');
    }

    protected function camelize($input)
    {
        return preg_replace('/(^|_)([a-z])/e', 'strtoupper("\\2")', $input);
    }
}