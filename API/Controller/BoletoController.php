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
use API\Service\EmailService;

class BoletoController extends Boleto
{
    private $retorno;

    public function generate()
    {
        $curl           = new CurlService();
        $this->retorno  = $curl->send($this->generateArrayData());
        return $this->retorno;
    }

    public function sendEmail()
    {

        if($this->retorno['status'] == false) return;

        $email = new EmailService();
        $email->setLogo(__DIR__ . '/../View/images/logopaghiper.gif', 'logo.gif');
        $email->email->addStringAttachment(file_get_contents($this->retorno['result']['url_slip_pdf']), 'boleto.pdf');
        $email->setTemplateDefault(true);

        //Recipients
        $email->email->setFrom('email@gmail.com', 'Jefferson Miranda');
        $email->email->addAddress('email@gmail.com', 'Jefferson Miranda');
        $email->email->addReplyTo('noreply@example.com', 'noreply');

        $email->email->Subject = 'BOLETO PAGAMENTO HOSPEDAGEM';
        $corpoEmail = "<h2>Olá, Jefferson!</h2>
                        <h3>Sua fatura já está fechada!</h3>
                        <p>
                            Para facilitar a sua vida, anexamos um boleto com o valor total para o pagamento.
                            <br /><br />
                            Se quiser, você pode gerar um boleto com valor diferente diretamente clicando neste link.
                        </p>
        
        
                        <h1><a href=\"{$this->retorno['result']['url_slip']}\">GERAR BOLETO</a></h1>
                        <br />
        
                        <p>Abraços <strong>Jefferson Miranda</strong></p>";

        $email->sendEmail($corpoEmail);

    }

}