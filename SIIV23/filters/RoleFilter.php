<?php

namespace app\filters;

use Yii;
use yii\base\ActionFilter;

class RoleFilter extends ActionFilter
{
    public $roles = [];

    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(['site/index']);
        }

        if (!empty($this->roles) && !in_array(Yii::$app->user->identity->getRol(), $this->roles)) {
            return Yii::$app->response->redirect(['site/error']);
        }

        return parent::beforeAction($action);
    }
}