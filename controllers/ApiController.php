<?php

/**
 * Created by PhpStorm.
 * User: IF
 * Date: 21.10.2017
 * Time: 18:08
 */
class ApiController extends CController
{
    public $layout = 'api';
    public function actionWithdraw()
    {
        $status = (new ApiService())->withdraw();

        $this->render('response', ['response' => $status == true ? 'ok' : 'error']);
    }
}