<?php

class SiteController extends CController {

	public function actions() {
		return array(
			'captcha'=>array('class'=>'CCaptchaAction',	'backColor'=>0xEBF4FB),
			'page'=>array('class'=>'SiteView'),
		);
	}

	public function actionIndex() {
		$this->render('index');
	}

	public function actionContact()	{
		$contact = new ContactForm;
		if (isset($_POST['ContactForm'])) {
			$contact->attributes = $_POST['ContactForm'];
			if ($contact->validate()) {
				$headers = "From: {$contact->email}\r\nReply-To: {$contact->email}";
				mail(Yii::app()->params['adminEmail'], $contact->subject, $contact->body, $headers);
				Yii::app()->user->setFlash('contact', 'Thank you for contacting us.');
				$this->refresh();
			}
		}
		$this->render('contact', array('contact'=>$contact));
	}

	public function actionLogin() {
		$form = new LoginForm;
		if (isset($_POST['LoginForm'])) {
			$form->attributes = $_POST['LoginForm'];
			if ($form->validate())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		$this->render('login', array('form'=>$form));
	}

	public function actionLogout() {
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
