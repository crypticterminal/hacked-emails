<?php

namespace Daniesy\HackedEmails;


use Daniesy\HackedEmails\Response\HackedEmailsResponse;

class HackedEmails
{
    public function check($email) : HackedEmailsResponse
    {
        $api_url = config('hacked_emails.api_url', 'https://hacked-emails.com/api');
        return $this->curl_get($api_url, ['q' => $email]);
    }

    private function curl_get($url, $parameters) {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $url."?".http_build_query($parameters),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        return new HackedEmailsResponse($response);
    }
}