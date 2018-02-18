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
class FakturaVydanaTest extends TestCase
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
        $this->object = new \PureOSC\flexibee\FakturaVydana();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    
}
