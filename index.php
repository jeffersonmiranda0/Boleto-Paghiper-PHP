<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 07/08/2018
 * Time: 20:40
 */

require_once 'vendor/autoload.php';

use \API\Controller\BoletoController;
$boleto = new BoletoController();
$boleto->setApiKey('apk_48016177-mTOwxLWbqhNtNOBcwmuvwXNEWGnAfwyS');
$boleto->setOrderId(date('m/Y'));
$boleto->setPayerEmail('jeffersonmiranda0@gmail.com');
$boleto->setPayerName('Jefferson Miranda');
$boleto->setPayerCpfCnpj(34639804016);
$boleto->setDaysDueDate(7);
$boleto->setPerDayInterest(true);
$boleto->setItems([
    "description"   => "REFERENTE HOSPEDAGEM ". date('m/Y'),
    "quantity"      => 1,
    "item_id"       => 1,
    "price_cents"   => 4000
]);
$boleto->generate();