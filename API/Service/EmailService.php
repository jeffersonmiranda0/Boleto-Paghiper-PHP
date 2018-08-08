<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 07/08/2018
 * Time: 22:12
 */

namespace API\Service;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class EmailService
{
    public $email           = null;
    private $templateDefault = true;
    private $logo = Array();

    /**
     * @param bool $templateDefault
     */
    public function setTemplateDefault($templateDefault)
    {
        $this->templateDefault = $templateDefault;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($url, $name)
    {
        $this->logo = [
            "url"   => $url,
            "name"  => $name
        ];
    }

    public function __construct()
    {
        $this->email = new PHPMailer(true);
    }


    private function setConfig()
    {
        //Server settings
        $this->email->SMTPDebug     = 2;
        $this->email->isSMTP();
        $this->email->Host          = 'smtp.gmail.com';
        $this->email->SMTPAuth      = true;
        $this->email->Username      = 'email@gmail.com';
        $this->email->Password      = 'xxxxxxxxxxxxxxx';
        $this->email->SMTPSecure    = 'TLS';
        $this->email->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $this->email->Port          = 587;
    }


    public function sendEmail($content = '')
    {
                          // Passing `true` enables exceptions
        try {
            $this->setConfig();

            //Content
            $this->templateDefault($content);

            $this->email->send();
            echo 'Email Enviado com sucesso';
        } catch (Exception $e) {
            echo 'Ocorreu um erro ao enviar o e-mail: ', $this->email->ErrorInfo;
        }
    }


    private function templateDefault($content = '')
    {

        if($this->templateDefault == false) return;

        $this->email->addAttachment($this->logo['url'], $this->logo['name']);
        $this->email->isHTML(true);
        $this->email->Body    = "
        <div style='background: #f7f7f7; width: 100%; height: 100%; padding-top: 60px; text-align: center; font-family: sans-serif'>
            <table cellpadding='0' cellspacing='0' width='800' style='background: #ffffff; color: #333333' align=\"center\">
                <thead>
                <tr>
                    <td style=\"text-align: center; padding: 30px\">
                        <img src=\"cid:{$this->logo['name']}\">
                    </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style=\"text-align: center; padding: 30px; background: #2e7cda; color: #ffffff\">
                        <h1 style=\"margin: 0\">{$this->email->Subject}</h1>
                    </td>
                </tr>
                <tr>
                    <td style=\"text-align: center; padding: 30px;\">
                    
                        {$content}
                        
                    </td>
                </tr>
                </tbody>
        
            </table>
        </div>
        ";
    }
}