<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Alumnos;
use app\models\Aspirantes;
use app\models\Personal;

class AuthController extends Controller
{
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $post = Yii::$app->request->post();
        
        if ($post) {
            switch ($post['form_type']) {
                case 'alumno_login':
                    return $this->handleAlumnoLogin($post);
                case 'aspirante_login':
                    return $this->handleAspiranteLogin($post);
                case 'personal_login':
                    return $this->handlePersonalLogin($post);
            }
        }

        return $this->redirect(['site/index']);
    }

    protected function handleAlumnoLogin($post)
    {
        $alumno = Alumnos::findOne(['alumno_numero_control' => $post['alumno_numero_control']]);
        
        if ($alumno && $alumno->validatePassword($post['alumno_password'])) {
            Yii::$app->user->login($alumno);
            return $this->redirect(['/alumno/dashboard']);
        }
        
        Yii::$app->session->setFlash('error', 'Credenciales incorrectas');
        return $this->redirect(['site/index']);
    }
}