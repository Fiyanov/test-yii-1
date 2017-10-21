<?php

/**
 * Created by PhpStorm.
 * User: IF
 * Date: 19.10.2017
 * Time: 18:23
 */
class RequestService
{
    const DEFAULT_USER_BALANCE = 1000;
    const STATUS_ACTIVATED = 1;

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
        $user = Users::model()->findByLink($link);

        if ($user) {

            if ($user->status == 0) {
                $user->api_key = $this->key($user->email);
                $user->balance = self::DEFAULT_USER_BALANCE;
                $user->status = self::STATUS_ACTIVATED;
                $user->save();
            }

            $auth = new linkAuth($link);

            if ($auth->authenticate()) {
                Yii::app()->user->login($auth);
            }

            Yii::app()->request->redirect('/site/cabinet');

            return true;
        }

        return false;
    }

    public function currentUserKey()
    {
        $user = Users::model()->find(Yii::app()->user->id);
        return Yii::app()->user->isGuest ? '' : $user->api_key;
    }

    private function process($email)
    {
        $link = $this->link($email);
        $this->send($link);
        $user = new Users();

        $user->email = $email;
        $user->link = $link;
        $user->name = (new CabinetService())->parseNameFromEmail($email);
        $user->save();

        Yii::app()->request->redirect('/site/send');
    }

    private function link($email)
    {
        return sha1('email' . $email);
    }

    private function uri($link)
    {
        return 'http://' . $_SERVER['HTTP_HOST'] . '/site/reg/' . $link;
    }

    private function key($email)
    {
        return sha1('key' . $email);
    }

    private function send($link)
    {
        $link = $this->uri($link);
        return mail("test@leads.su", "link", "Для регистрации пройдите по ссылке: $link");
    }
}