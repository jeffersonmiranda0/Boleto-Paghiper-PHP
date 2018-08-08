<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 07/08/2018
 * Time: 20:07
 */

namespace API\Model;

class Boleto
{
    protected $apiKey;
    protected $order_id;
    protected $payer_email;
    protected $payer_name;
    protected $payer_cpf_cnpj;
    protected $payer_phone;
    protected $payer_street;
    protected $payer_number;
    protected $payer_complement;
    protected $payer_district;
    protected $payer_city;
    protected $payer_state;
    protected $payer_zip_code;
    protected $notification_url;
    protected $discount_cents;
    protected $shipping_price_cents;
    protected $shipping_methods;
    protected $fixed_description;
    protected $type_bank_slip = 'boletoA4';
    protected $days_due_date;
    protected $late_payment_fine;
    protected $per_day_interest;

    protected $items = [];

    /**
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param mixed $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }

    /**
     * @return mixed
     */
    public function getPayerEmail()
    {
        return $this->payer_email;
    }

    /**
     * @param mixed $payer_email
     */
    public function setPayerEmail($payer_email)
    {
        $this->payer_email = $payer_email;
    }

    /**
     * @return mixed
     */
    public function getPayerName()
    {
        return $this->payer_name;
    }

    /**
     * @param mixed $payer_name
     */
    public function setPayerName($payer_name)
    {
        $this->payer_name = $payer_name;
    }

    /**
     * @return mixed
     */
    public function getPayerCpfCnpj()
    {
        return $this->payer_cpf_cnpj;
    }

    /**
     * @param mixed $payer_cpf_cnpj
     */
    public function setPayerCpfCnpj($payer_cpf_cnpj)
    {
        $this->payer_cpf_cnpj = $payer_cpf_cnpj;
    }

    /**
     * @return mixed
     */
    public function getPayerPhone()
    {
        return $this->payer_phone;
    }

    /**
     * @param mixed $payer_phone
     */
    public function setPayerPhone($payer_phone)
    {
        $this->payer_phone = $payer_phone;
    }

    /**
     * @return mixed
     */
    public function getPayerStreet()
    {
        return $this->payer_street;
    }

    /**
     * @param mixed $payer_street
     */
    public function setPayerStreet($payer_street)
    {
        $this->payer_street = $payer_street;
    }

    /**
     * @return mixed
     */
    public function getPayerNumber()
    {
        return $this->payer_number;
    }

    /**
     * @param mixed $payer_number
     */
    public function setPayerNumber($payer_number)
    {
        $this->payer_number = $payer_number;
    }

    /**
     * @return mixed
     */
    public function getPayerComplement()
    {
        return $this->payer_complement;
    }

    /**
     * @param mixed $payer_complement
     */
    public function setPayerComplement($payer_complement)
    {
        $this->payer_complement = $payer_complement;
    }

    /**
     * @return mixed
     */
    public function getPayerDistrict()
    {
        return $this->payer_district;
    }

    /**
     * @param mixed $payer_district
     */
    public function setPayerDistrict($payer_district)
    {
        $this->payer_district = $payer_district;
    }

    /**
     * @return mixed
     */
    public function getPayerCity()
    {
        return $this->payer_city;
    }

    /**
     * @param mixed $payer_city
     */
    public function setPayerCity($payer_city)
    {
        $this->payer_city = $payer_city;
    }

    /**
     * @return mixed
     */
    public function getPayerState()
    {
        return $this->payer_state;
    }

    /**
     * @param mixed $payer_state
     */
    public function setPayerState($payer_state)
    {
        $this->payer_state = $payer_state;
    }

    /**
     * @return mixed
     */
    public function getPayerZipCode()
    {
        return $this->payer_zip_code;
    }

    /**
     * @param mixed $payer_zip_code
     */
    public function setPayerZipCode($payer_zip_code)
    {
        $this->payer_zip_code = $payer_zip_code;
    }

    /**
     * @return mixed
     */
    public function getNotificationUrl()
    {
        return $this->notification_url;
    }

    /**
     * @param mixed $notification_url
     */
    public function setNotificationUrl($notification_url)
    {
        $this->notification_url = $notification_url;
    }

    /**
     * @return mixed
     */
    public function getDiscountCents()
    {
        return $this->discount_cents;
    }

    /**
     * @param mixed $discount_cents
     */
    public function setDiscountCents($discount_cents)
    {
        $this->discount_cents = $discount_cents;
    }

    /**
     * @return mixed
     */
    public function getShippingPriceCents()
    {
        return $this->shipping_price_cents;
    }

    /**
     * @param mixed $shipping_price_cents
     */
    public function setShippingPriceCents($shipping_price_cents)
    {
        $this->shipping_price_cents = $shipping_price_cents;
    }

    /**
     * @return mixed
     */
    public function getShippingMethods()
    {
        return $this->shipping_methods;
    }

    /**
     * @param mixed $shipping_methods
     */
    public function setShippingMethods($shipping_methods)
    {
        $this->shipping_methods = $shipping_methods;
    }

    /**
     * @return mixed
     */
    public function getFixedDescription()
    {
        return $this->fixed_description;
    }

    /**
     * @param mixed $fixed_description
     */
    public function setFixedDescription($fixed_description)
    {
        $this->fixed_description = $fixed_description;
    }

    /**
     * @return mixed
     */
    public function getTypeBankSlip()
    {
        return $this->type_bank_slip;
    }

    /**
     * @param mixed $type_bank_slip
     */
    public function setTypeBankSlip($type_bank_slip)
    {
        $this->type_bank_slip = $type_bank_slip;
    }

    /**
     * @return mixed
     */
    public function getDaysDueDate()
    {
        return $this->days_due_date;
    }

    /**
     * @param mixed $days_due_date
     */
    public function setDaysDueDate($days_due_date)
    {
        $this->days_due_date = $days_due_date;
    }

    /**
     * @return mixed
     */
    public function getLatePaymentFine()
    {
        return $this->late_payment_fine;
    }

    /**
     * @param mixed $late_payment_fine
     */
    public function setLatePaymentFine($late_payment_fine)
    {
        $this->late_payment_fine = $late_payment_fine;
    }

    /**
     * @return mixed
     */
    public function getPerDayInterest()
    {
        return $this->per_day_interest;
    }

    /**
     * @param mixed $per_day_interest
     */
    public function setPerDayInterest($per_day_interest)
    {
        $this->per_day_interest = $per_day_interest;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(Array $items)
    {
        $description    = isset($items['description']) ? $items['description'] : '';
        $quantity       = isset($items['quantity']) ? $items['quantity'] : '';
        $item_id        = isset($items['item_id']) ? $items['item_id'] : '';
        $price_cents    = isset($items['price_cents']) ? $items['price_cents'] : '';

        $this->items[] = [
            'description'   => $description,
            'quantity'      => $quantity,
            'item_id'       => $item_id,
            'price_cents'   => $price_cents
        ];
    }


    public function generateArrayData()
    {
        $data   = Array();

        foreach ($this as $key => $value){

            $data[$key] = $value;

        }

        return $data;
    }



}