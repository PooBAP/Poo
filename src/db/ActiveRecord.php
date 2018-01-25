<?php

/**
 * @link http://www.poodev.com/
 * @copyright Copyright (c) 2008 MPu Technology
 * @license http://www.poodev.com/license/
 */

/**
 * ActiveRecord is the base class for classes representing relational data in terms of objects.
 * 
 * @author Agus Suhartono <agus.suhartono@gmail.com>
 * @since 1.0.0
 */
class ActiveRecord extends yii\db\ActiveRecord
{

    /**
     * Return ActiveQueri of ActiveRecord
     * 
     * @return yii/db/ActiveQuery the newly created [[yii/db/ActiveQuery]] instance.
     * @since 1.0.0
     */
    public static function query()
    {
        return static::find();
    }    
    
    /**
     * Creates an [[ActiveQuery]] instance with a given SQL statement.
     * 
     * @param string $sql the SQL statement to be executed
     * @param array $params parameters to be bound to the SQL statement during execution.
     * @return yii/db/ActiveQuery the newly created [[yii/db/ActiveQuery]] instance.
     * @since 1.0.0
     */
    public static function queryBySql($sql, $params = [])
    {
        return static::findBySql($sql, $params);
    }       
   
    /**
     * Get ActiveQuery of ActiveRecord with condition
     * 
     * @param mixed $condition please refer to [[findOne()]] for the explanation of this parameter
     * @return yii/db/ActiveQuery the newly created [[yii/db/ActiveQuery]] instance.
     * @since 1.0.0
     */
    protected static function queryByCondition($condition) 
    {
        return static::findByCondition($condition);
    }

}
