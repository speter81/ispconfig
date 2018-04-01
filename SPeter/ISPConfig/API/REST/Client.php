<?php
namespace SPeter\ISPConfig\API\REST;


class Client
{
    private $remote_url,
            $session_id;

    public function __construct($url)
    {
        $this->remote_url =$url;
    }

    public function login($user, $pass)
    {
        $response = $this->call('login', ['username' => $user, 'password' => $pass, 'client_login' => false]);
        if ($response->successful()) {
            $this->session_id = $response->response();
            return true;
        }
        throw new Exception($response->message());
    }

    private function call($method, $data)
    {
        if ( !is_array($data)) {
            return false;
        }
        $json = json_encode($data);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 1);

        if($data) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
        }

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

        curl_setopt($curl, CURLOPT_URL, $this->remote_url . '?' . $method);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        curl_close($curl);

         $resp = json_decode($result, true);

         $response = new Response;

         foreach ($resp as $key => $value) {
             $response->$key = $value;
         }

         return $response;
    }
}
