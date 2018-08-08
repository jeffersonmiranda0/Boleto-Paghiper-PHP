<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 07/08/2018
 * Time: 20:42
 */

namespace API\Controller;
use API\Model\Boleto;
use API\Service\CurlService;

class BoletoController extends Boleto
{

    public function generate()
    {
        $curl = new CurlService();
        return $curl->send($this->generateArrayData());
    }

}