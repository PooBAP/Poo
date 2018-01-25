<?php

/**
 * @link http://www.poodev.com/
 * @copyright Copyright (c) 2008 MPu Technology
 * @license http://www.poodev.com/license/
 */

namespace poo\base;

use yii\base\BaseObject;

/**
 * Simple configuration object
 * 
 * Object that inherit from [[Configurator]] can load with namespace
 * 
 * Used  
 * 
 * configuration load via init method
 * 
 * public function init() 
 * {
 *      $this->data = [
 *           'key1' => 'value1',
 *           'key12 => 'value2',
 *        ];
 * }
 * 
 * the item of configuration can access like
 * 
 *   $configObject->data['value1'];
 * 
 * or 
 * 
 *   $configObject['value1'];
 * 
 * all configuration can access like :
 * 
 *   $configObject->toArray();
 * 
 * or 
 * 
 *   $configObject->getConfig();
 * 
 * @author Agus Suhartono <agus.suhartono@gmail.com>
 * @since 1.0.0
 */
class Configuration extends BaseObject implements \IteratorAggregate, \ArrayAccess, \Countable, \yii\base\Arrayable
{

    use \yii\base\ArrayAccessTrait;

    public $data = [];

    /**
     * Constructor.
     * 
     * @param array $config
     */
    public function __construct($config = [])
    {
        if (!empty($config)) {
            $this->data = $config;
        }
        $this->init();
    }

    /**
     * Get all config value
     * 
     * @return array
     * @since 1.0.0
     */
    public function getConfig()
    {
        return $this->data;
    }

    public function fields()
    {
        return [];
    }

    public function extraFields()
    {
        return [];
    }

    /**
     * Get all config value
     * 
     * @return array
     */
    public function toArray()
    {
        return $this->getConfig();
    }

}
