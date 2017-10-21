<?php

/**
 * Created by PhpStorm.
 * User: IF
 * Date: 19.10.2017
 * Time: 19:02
 */
class Users extends CActiveRecord
{
    public function rules()
    {
        return array(
            array('email', 'required'),
            array('email', 'email')
        );
    }

    static public function findByLink($link)
    {
        return self::model()->find('link=:link', array('link' => $link));
    }

    static public function findByKey($key)
    {
        return self::model()->find('api_key=:key', array('key' => $key));
    }

    static public function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}