<?php

class SiteController extends CController
{
    public function actionIndex()
    {
        $this->render('form', ['model' => (new RequestService())->request()]);
    }

	public function actionSend()
	{
		$this->render('send');
	}

	public function actionReg($link)
	{
		(new RequestService())->reg($link);

		$this->render('reg');
	}

	public function actionCabinet()
	{
		$this->render('cabinet', [
			'model' => (new CabinetService())->process(),
			'key' => (new RequestService())->currentUserKey(),
			'balance'
		]);
	}

    /**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
}