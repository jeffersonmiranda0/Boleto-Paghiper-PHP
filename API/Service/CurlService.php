<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 07/08/2018
 * Time: 20:21
 */

namespace API\Service;

class CurlService
{
    private $url        = "http://api.paghiper.com/transaction/create/";
    private $mediaType  = "application/json";
    private $charSet    = "UTF-8";

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function send(Array $data)
    {

        $data_post      = json_encode( $data );

        echo $data_post . '<br />';

        $url            = $this->url;
        $mediaType      = $this->mediaType; // formato da requisição
        $charSet        = $this->charSet;
        $headers        = array();
        $headers[]      = "Accept: ".$mediaType;
        $headers[]      = "Accept-Charset: ".$charSet;
        $headers[]      = "Accept-Encoding: ".$mediaType;
        $headers[]      = "Content-Type: ".$mediaType.";charset=".$charSet;

        $ch              = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_post);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $result          = curl_exec($ch);
        $json            = json_decode($result, true);
        $httpCode        = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        var_dump($result);

        if($httpCode == 201):

            return [
                'status' => true,
                'result' => [
                    'transaction_id'    => $json['create_request']['transaction_id'],
                    'url_slip'          => $json['create_request']['bank_slip']['url_slip'],
                    'digitable_line'    => $json['create_request']['bank_slip']['digitable_line']
                ]
            ];

        endif;

        return [
            'status' => false
        ];

    }

}