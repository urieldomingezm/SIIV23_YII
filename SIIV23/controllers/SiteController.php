<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Alumnos;
use app\models\Aspirantes;
use app\models\Personal;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->view->params['hideNavbar'] = true;
        $this->view->params['isLoginPage'] = true;
        
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $post = Yii::$app->request->post();
        
        if ($post) {
            // Validar CSRF token
            if (!Yii::$app->request->validateCsrfToken()) {
                Yii::$app->session->setFlash('error', 'Token de seguridad inválido');
                return $this->render('index');
            }

            // Validar captcha
            if (!$this->validateCaptcha($post)) {
                Yii::$app->session->setFlash('error', 'Código de verificación incorrecto');
                return $this->render('index');
            }

            switch ($post['form_type']) {
                case 'alumno_login':
                    return $this->handleAlumnoLogin($post);
                case 'aspirante_login':
                    return $this->handleAspiranteLogin($post);
                case 'personal_login':
                    return $this->handlePersonalLogin($post);
            }
        }

        return $this->render('index');
    }

    protected function handleAlumnoLogin($post)
    {
        $alumno = Alumnos::findOne(['alumno_numero_control' => $post['alumno_numero_control']]);
        
        if ($alumno && $alumno->validatePassword($post['alumno_password'])) {
            if (Yii::$app->user->login($alumno)) {
                // Actualizar último acceso
                $alumno->alumno_ultimo_acceso = date('Y-m-d H:i:s');
                $alumno->save();
                
                return $this->goBack();
            }
        }

        Yii::$app->session->setFlash('error', 'Número de control o NIP incorrectos');
        return $this->render('index');
    }

    protected function validateCaptcha($post)
    {
        // Implementar validación de captcha
        return true; // Por ahora retornamos true
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
