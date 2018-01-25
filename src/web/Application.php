<?php

/**
 * @link http://www.poodev.com/
 * @copyright Copyright (c) 2008 MPu Technology
 * @license http://www.poodev.com/license/
 */

namespace poo\web;

/**
 * Application is the base class for all web application classes in Poo.
 *
 * @author Agus Suhartono <agus.suhartoo@gmail.com>
 * @since 1.0.0
 */
class Application extends \yii\web\Application
{

    /**
     * @inheritdoc
     */
    public function coreComponents()
    {
        $coreComponent = parent::coreComponents();
        //.... Add and Change core component
        if (isset($coreComponentp['formatter'])) {
            unset($coreComponentp['formatter']);
        }
        $coreComponentp['formatter'] = [
            'class' => 'poo\i18n\Formatter'
        ];
        return $coreComponent;
    }

}
