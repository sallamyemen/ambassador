<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\FormMailTo;
use Yii;
use yii\helpers\Url;

class SiteController extends Controller
{
    public $layout = 'front';

    public function actions(): array
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $this->layout = 'front';

        $model = new FormMailTo();
        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            if ($model->validate()) {
                $mailtoLink = 'mailto:' . "anna@kolambassador.com" . '?subject=Form Submission' .
                    '&body=First Name: ' . $model->firstName .
                    '%0D%0AMail: ' . $model->mail .
                    '%0D%0APart Number: ' . $model->phone .
                    '%0D%0AComment: ' . $model->comment ;

                return $this->redirect($mailtoLink);
            }
        }

        return $this->render('index', ['model' => $model]);
    }
}
