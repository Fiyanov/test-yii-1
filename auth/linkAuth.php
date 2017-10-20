<?php

/**
 * Created by PhpStorm.
 * User: IF
 * Date: 21.10.2017
 * Time: 0:15
 */
class linkAuth extends CUserIdentity
{
    private $id;

    public function __construct($user)
    {
        $this->id = $user->id;
    }

    public function authenticate()
    {
        return true;
    }

    public function getId()
    {
        return $this->id;
    }
}