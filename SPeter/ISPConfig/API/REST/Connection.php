<?php
namespace SPeter\ISPConfig\API\REST;


class Connection
{
    private $remoteURL;

    protected $sessionId = NULL;

    public function __construct($url)
    {
        $this->remoteURL =$url;
    }

    public function call($method, $data)
    {
        if ( !is_array($data)) {
            return false;
        }
        $json = json_encode($data);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 1);

        if ($data) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
        }

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

        curl_setopt($curl, CURLOPT_URL, $this->remoteURL . '?' . $method);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        if(($result = curl_exec($curl)) === false) {
            throw new Exception('cURL error: '.curl_error($curl));
        }
        curl_close($curl);

        $resp = json_decode($result, true);

        $response = new Response;

        if(is_array($resp)) {
            foreach ($resp as $key => $value) {
                $response->$key = $value;

            }
        }

        return $response;
    }
}