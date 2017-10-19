<?php

/**
 * Created by PhpStorm.
 * User: IF
 * Date: 19.10.2017
 * Time: 18:23
 */
class RequestService
{
    public function request()
    {
        $model = new Request();
        $model->attributes = $_POST['Request'];

        if($model->validate()) {
            $this->process($model->email);
        }

        return $model;
    }

    public function reg($link)
    {
        return $link;
    }

    private function process($email)
    {
        $link = $this->generate($email);
        $this->send($link);
        Yii::app()->request->redirect('site/send');
    }

    private function generate($email)
    {
        return 'http://' . $_SERVER['HTTP_HOST'] . '/site/reg/' . sha1('email' . $email);
    }

    private function send($link)
    {
        return mail("test@leads.su", "link", "Для регистрации пройдите по ссылке: $link");
    }
}