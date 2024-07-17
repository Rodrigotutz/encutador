<?php

namespace Rodrigotutz\Ulvis;

class UrlShortner {
    public static function short(string $url) {
        $params = [
            'url' => $url
        ];

        return $response = self::send($params);
    }

    private static function send(array $params = []) {
        $endpoint = 'https://ulvis.net/api.php?' . http_build_query($params);

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]); 

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}