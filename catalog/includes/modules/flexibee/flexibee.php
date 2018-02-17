<?php
/**
  * osCommerce Online Merchant
  *
  * @copyright (c) 2016 osCommerce; https://www.oscommerce.com
  * @license MIT; https://www.oscommerce.com/license/mit.txt
  */

  use OSC\OM\HTML;
  use OSC\OM\OSCOM;
  use OSC\OM\Registry;

  class flexibee {
    var $code, $title, $description, $icon, $enabled;

// class constructor
    function __construct() {
      global $order;

      $OSCOM_Db = Registry::get('Db');

      $this->code = 'flexibee';
      $this->title = OSCOM::getDef('module_flexibee_text_title');
      $this->description = OSCOM::getDef('module_flexibee_text_description');
      $this->icon = '';
    }

    function check() {
      return defined('MODULE_SHIPPING_FLEXIBEE_STATUS');
    }

    function install() {
      $OSCOM_Db = Registry::get('Db');

      $OSCOM_Db->save('configuration', [
        'configuration_title' => 'Enable Flexibee',
        'configuration_key' => 'MODULE_FLEXIBEE_STATUS',
        'configuration_value' => 'True',
        'configuration_description' => 'Do you want to offer flexibee?',
        'configuration_group_id' => '1',
        'sort_order' => '1',
        'set_function' => 'tep_cfg_select_option(array(\'True\', \'False\'), ',
        'date_added' => 'now()'
      ]);

            
      $OSCOM_Db->save('configuration', [
        'configuration_title' => 'URL Flexibee API',
        'configuration_key' => 'FLEXIBEE_URL',
        'configuration_value' => 'https://demo.flexibee.eu:5434',
        'configuration_description' => 'Server You use for Accounting.',
        'configuration_group_id' => '1',
        'sort_order' => '1',
        'date_added' => 'now()'
      ]);

      $OSCOM_Db->save('configuration', [
        'configuration_title' => 'API user Login',
        'configuration_key' => 'FLEXIBEE_LOGIN',
        'configuration_value' => 'winstrom',
        'configuration_description' => 'User used with FlexiBee.',
        'configuration_group_id' => '1',
        'sort_order' => '1',
        'date_added' => 'now()'
      ]);
      $OSCOM_Db->save('configuration', [
        'configuration_title' => 'API user Password',
        'configuration_key' => 'FLEXIBEE_PASSWORD',
        'configuration_value' => 'winstrom',
        'configuration_description' => 'FlexiBee API User password',
        'configuration_group_id' => '1',
        'sort_order' => '1',
        'date_added' => 'now()'
      ]);

      $OSCOM_Db->save('configuration', [
        'configuration_title' => 'Company',
        'configuration_key' => 'FLEXIBEE_COMPANY',
        'configuration_value' => 'demo',
        'configuration_description' => 'Prefered FlexiBee company database name',
        'configuration_group_id' => '1',
        'sort_order' => '1',
        'date_added' => 'now()'
      ]);


    }

    function remove() {
      return Registry::get('Db')->exec('delete from :table_configuration where configuration_key in ("' . implode('", "', $this->keys()) . '")');
    }

    function keys() {
      return array('MODULE_FLEXIBEE_STATUS', 'FLEXIBEE_URL','FLEXIBEE_LOGIN','FLEXIBEE_PASSWORD','FLEXIBEE_COMPANY');
    }
  }
?>
