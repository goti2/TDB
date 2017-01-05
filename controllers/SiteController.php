<?php

namespace app\controllers;

use app\models\City;
use app\models\Country;
use app\models\Hotel;
use app\models\ShowDataForm;

class SiteController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $request = \Yii::$app->request;
        $showDataForm = new ShowDataForm();

        if($request->isPost)
        {
            $showDataForm->load($request->post());
        }

        return $this->render('index', [
            'showDataForm' => $showDataForm
        ]);
    }

}
