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
}