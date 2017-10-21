<?php

/**
 * Created by PhpStorm.
 * User: IF
 * Date: 21.10.2017
 * Time: 8:41
 */
class CabinetService
{
    public function changeName($uid, $name)
    {
        $user = Users::model()->find($uid);
        $user->name = $name;
        $user->save();
    }

    public function parseNameFromEmail($email)
    {
        $parts = explode('@', $email);
        return $parts[0];
    }

    public function process()
    {
        if (isset($_POST['exit'])) {
            Yii::app()->user->logout();
            Yii::app()->request->redirect('/');
        }

        $model = new Cabinet();

        if (isset($_POST['Cabinet'])) {

            $model->attributes = $_POST['Cabinet'];

            if ($model->validate()) {
                $this->changeName(Yii::app()->user->id, $model->name);
            }
        }

        if (!Yii::app()->user->isGuest) {
            $user = Users::model()->find(Yii::app()->user->id);
            $model->name = $user->name;
            $model->balance = $user->balance;
        }

        return $model;
    }
}