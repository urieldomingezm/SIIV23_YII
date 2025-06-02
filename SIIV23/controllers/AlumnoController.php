<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\filters\RoleFilter;

class AlumnoController extends Controller
{
    public function behaviors()
    {
        return [
            'role' => [
                'class' => RoleFilter::className(),
                'roles' => ['alumno'],
            ],
        ];
    }

    public function actionDashboard()
    {
        return $this->render('dashboard');
    }
}