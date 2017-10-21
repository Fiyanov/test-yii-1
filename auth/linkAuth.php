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
    private $link;

    public function __construct($link)
    {
        $this->link = $link;
    }

    public function authenticate()
    {
        $user = Users::model()->findByLink($this->link);

        if ($user) {
            $this->id = $user->id;
            return true;
        }

        return false;
    }

    public function getId()
    {
        return $this->id;
    }
}