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
class Kontakt extends \FlexiPeeHP\Kontakt {
/**
 * take Oscommerce Data
 * 
 * @param int $address_id
 * @param string|Adresar $adresar
 * @param string $firstname
 * @param string $lastname
 * @param string $email_address
 * @param string $street_address
 * @param string $city
 * @param string $postocode
 * @param string $country
 * @param string $telephone
 * @param string $fax
 */
    public function takeOscData($address_id, $adresar, $firstname, $lastname, $email_address, $street_address, $city, $postcode, $country, $telephone, $fax) {
        $this->takeData([
            'id' => 'ext:customers:' . $address_id,
            'firma' => $adresar,
            'jmeno' => $firstname,
            'prijmeni' => $lastname,
            'email' => $email_address,
            'ulice' => $street_address,
            'mesto' => $city,
            'psc' => $postcode,
            'stat' => $country,
            'tel' => $telephone,
            'fax' => $fax]);

        }
        
    }
