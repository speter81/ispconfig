<?php
namespace SPeter\ISPConfig\API\REST;


class Response {

    public $code, $message, $response;

    public function code() {
        return $this->code;
    }

    public function message()
    {
        return $this->message;
    }

    public function response()
    {
        return $this->response;
    }

    public function successful()
    {
        return strtolower($this->code) == 'ok' ? true : false;
    }

}