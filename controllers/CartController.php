<?php

namespace app\controllers;
use app\models\Clock;
use app\models\Glasses;
use app\models\Portmone;
use app\models\Cart;
use app\models\StaticSource;
use yii\web\Controller;
use Yii;

class CartController extends Controller
{
    /**
     * @param id
     * @param table
     * @return string
     */
    public function actionAdd()
    {
        $code = Yii::$app->request->get('code');
        $model = StaticSource::getModelByType($table);

        $product = $model::findOne($id);

        $session = Yii::$app->session;
        $session->open();

        $cart = new Cart();
        $cart->addToCart($product);

        return $this->render('cart-modal', compact('session'));
    }

    public function clearCart()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
    }
}