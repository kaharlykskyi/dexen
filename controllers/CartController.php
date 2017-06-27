<?php

namespace app\controllers;
use app\models\Clock;
use app\models\Glasses;
use app\models\Order;
use app\models\Portmone;
use app\models\Cart;
use app\models\StaticSource;
use yii\web\Controller;
use Yii;

class CartController extends Controller
{
    /**
     * Принимает get запростом параметр code, добавляет товар в корзину
     * @param id
     * @param table
     * @return string
     */
    public function actionAdd()
    {
        //$code simple c1351 - table = c, id = 1351
        $code = Yii::$app->request->get('code');
        $table = substr($code, 0, 1);
        $id = substr($code, 1);
        $qty = (int)Yii::$app->request->get('qty');
        $qty = !$qty ? 1 : $qty;

        $model = StaticSource::getModelByType($table);

        $product = $model::findOne($id);
        if(empty($product)) return false;

        $session = Yii::$app->session;
        $session->open();

        $cart = new Cart();
        $cart->addToCart($product, $qty, $table);
        if(!Yii::$app->request->isAjax) {
            return $this->redirect(Yii::$app->request->referrer);
        }
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    /**
     * Очищает всю корзину
     * @return string
     */
    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    /**
     * Удаляем один елемент с корзины
     * @return string
     */
    public function actionDelItem()
    {
        $code = Yii::$app->request->get('code');
        $id = substr($code, 1);
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id);
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    /**
     * Возвращает вид корзины (без layout`a)
     * @return string
     */
    public function actionShow()
    {
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    /**
     * Метод для вида оформления заказа
     * @return string
     */
    public function actionView()
    {
        $session = Yii::$app->session;
        $session->open();
        //TODO ORDER
        $order = new Order();
        return $this->render('view', compact('session', 'order'));
    }
}