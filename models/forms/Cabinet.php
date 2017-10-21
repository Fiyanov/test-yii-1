<?php

/**
 * Created by PhpStorm.
 * User: IF
 * Date: 21.10.2017
 * Time: 8:29
 */
class Cabinet extends  CFormModel
{
    public $name;
    public $balance;

    public function rules()
    {
        return array(
            array('name', 'required'),
            array('balance', 'safe')
        );
    }
}