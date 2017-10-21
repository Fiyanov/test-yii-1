<?php

/**
 * Created by PhpStorm.
 * User: IF
 * Date: 21.10.2017
 * Time: 19:23
 */
class ApiService
{
    public function withdraw()
    {
        $postData = file_get_contents('php://input');
        $data = json_decode($postData, true);

        if (empty($data) || empty($data['key']) || empty($data['sum'])) {
            return false;
        }

        $user = Users::model()->findByKey($data['key']);

        if (!$user) {
            return false;
        }

        $user->balance = $user->balance - $data['sum'];
        $user->save();

        return true;
    }
}