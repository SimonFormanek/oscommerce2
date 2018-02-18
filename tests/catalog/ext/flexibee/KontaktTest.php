<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use PHPUnit\Framework\TestCase;

/**
 * Description of AdresarTest
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class KontaktTest extends TestCase
{

    
    /**
     * @var ApiClient
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new \PureOSC\flexibee\Kontakt();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    public function testTakeOscData(){
        $address_id=1;
        $adresar = new \PureOSC\flexibee\Adresar;
        $firstname = 'FirstnameTest';
        $lastname = 'LastnameTest';
        $email_address = 'mail@simonformanek.cz';
        $street_address = 'Ulice 1';
        $city = 'Mesto';
        $postcode = '10000';
        $country = 'code:CZE';
        $telephone = '000000';
        $fax = '0000000';
        $this->object->takeOscData($address_id, $adresar, $firstname, $lastname, $email_address, $street_address, $city, $postcode, $country, $telephone, $fax);
        $this->assertEquals([], $this->object->getData());
        }
}
