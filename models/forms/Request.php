<?php

/**
 * Created by PhpStorm.
 * User: IF
 * Date: 19.10.2017
 * Time: 18:28
 */
class Request extends  CFormModel
{
    public $email;

    public function rules()
    {
        return array(
            array('email', 'required'),
            array('email', 'email')
        );
    }

    public function attributeLabels()
    {
        return [
            'email' => 'почта'
        ];
    }
}