<?php

namespace app\controllers;

use app\models\Clock;
use app\models\Glasses;
use app\models\Portmone;
use Yii;
use yii\db\Expression;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yz\shoppingcart\ShoppingCart;

class SiteController extends Controller
{

    const COUNT_CLOCK = 3;
    const COUNT_GLASSES = 3;
    const COUNT_PORTMONE = 2;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
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
        //select count(id) to start php rand()
        $count_clock = Clock::find()->select('id')->count('id');
        $count_glasses = Glasses::find()->select('id')->count('id');
        $count_portmone = Portmone::find()->select('id')->count('id');

        //rand some offset from queries
        $clock_off = rand(1, $count_clock - self::COUNT_CLOCK);
        $glasses_off = rand(1, $count_glasses - self::COUNT_GLASSES);
        $portmone_off = rand(1, $count_portmone - self::COUNT_PORTMONE);

        $clocks = Clock::find()->select(['id', 'name', 'image_main', 'price', 'hot_price', new Expression('"c" as "table"')])
            ->where(['>', 'hot_price', 0])
            ->offset($clock_off)
            ->limit(self::COUNT_CLOCK)
            ->asArray()->all();

        $glasses = Glasses::find()->select(['id', 'name', 'image_main', 'price', 'hot_price', new Expression('"g" as "table"')])
            ->where(['>', 'hot_price', 0])
            ->offset($glasses_off)
            ->limit(self::COUNT_GLASSES)
            ->asArray()->all();

        $portmones = Portmone::find()->select(['id', 'name', 'image_main', 'price', 'hot_price', new Expression('"p" as "table"')])
            ->where(['>', 'hot_price', 0])
            ->offset($portmone_off)
            ->limit(self::COUNT_PORTMONE)
            ->asArray()->all();

        $main_products = ArrayHelper::merge($clocks, $glasses, $portmones);
        shuffle($main_products);

        echo '<pre>'.print_r($main_products, true).'</pre>';

        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
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
