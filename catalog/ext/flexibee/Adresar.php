<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PureOSC\flexibee;

/**
 * Description of Customer
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Adresar extends \FlexiPeeHP\Adresar {

    /**
     * take Oscommerce data as Flexibee columns
     * 
     * @param int $customer_id
     * @param string $nazev
     * @param string $poznam
     * @param string $nazev
     * @param string $email_address
     * @param string $street_address
     * @param string $company_id
     * @param string $vat_id
     * @param string $city
     * @param string $postocode
     * @param string $telephone
     * @param string $fax
     * @param string $country
     */
    public function takeOscData($customer_id, $nazev, $poznam, $nazev, $email_address, $street_address, $company_id, $vat_id, $city, $postocode, $telephone, $fax, $country) {
        $this->takeData([
          'id' => 'ext:customers:' . $customer_id,
          'poznam' => 'zalozeno z eshopu',
          'nazev' => $nazev,
          'email' => $email_address,
          'ic' => $company_id,
          'dic' => $vat_id,
          'ulice' => $street_address,
          'mesto' => $city,
          'psc' => $postcode,
          'stat' => $country,
          'tel' => $telephone,
          'fax' => $fax,
        ]);
    }

}
