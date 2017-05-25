<?php

use yii\db\Migration;

class m170525_094329_insert_portmone extends Migration
{
    public function up()
    {

        $this->insert('portmone',array(
            'name'=>'Тестовая запись кошелька #1',
            'image_main' =>'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'images' => 'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'manufacture' => '1',
            'price' => '5000',
            'gender' => '1',
            'material' => '2',
            'width' => '50',
            'heigth' => '50',
            'depth' => '50',
            'type' => '2',
            'in_stock' => '1',
            'count' => '10',
            'purchase_price' => '4500',
            'hot_price' => '600',
            'display' => '1',
            'description' => 'test',
        ));

        $this->insert('portmone',array(
            'name'=>'Тестовая запись кошелька #2',
            'image_main' =>'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'images' => 'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'manufacture' => '1',
            'price' => '1000',
            'gender' => '1',
            'material' => '2',
            'width' => '50',
            'heigth' => '50',
            'depth' => '50',
            'type' => '2',
            'in_stock' => '1',
            'count' => '10',
            'purchase_price' => '800',
            'hot_price' => '1200',
            'display' => '1',
            'description' => 'test',
        ));

        $this->insert('portmone',array(
            'name'=>'Тестовая запись кошелька #3',
            'image_main' =>'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'images' => 'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'manufacture' => '1',
            'price' => '1100',
            'gender' => '1',
            'material' => '2',
            'width' => '50',
            'heigth' => '50',
            'depth' => '50',
            'type' => '2',
            'in_stock' => '1',
            'count' => '10',
            'purchase_price' => '800',
            'hot_price' => '1200',
            'display' => '1',
            'description' => 'test',
        ));

        $this->insert('portmone',array(
            'name'=>'Тестовая запись кошелька #4',
            'image_main' =>'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'images' => 'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'manufacture' => '1',
            'price' => '1000',
            'gender' => '1',
            'material' => '2',
            'width' => '50',
            'heigth' => '50',
            'depth' => '50',
            'type' => '2',
            'in_stock' => '1',
            'count' => '10',
            'purchase_price' => '800',
            'hot_price' => '1200',
            'display' => '1',
            'description' => 'test',
        ));

        $this->insert('portmone',array(
            'name'=>'Тестовая запись кошелька #5',
            'image_main' =>'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'images' => 'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'manufacture' => '1',
            'price' => '900',
            'gender' => '1',
            'material' => '2',
            'width' => '50',
            'heigth' => '50',
            'depth' => '50',
            'type' => '2',
            'in_stock' => '1',
            'count' => '10',
            'purchase_price' => '800',
            'hot_price' => '1300',
            'display' => '1',
            'description' => 'test',
        ));
    }

    public function down()
    {
        echo "m170525_094329_insert_portmone cannot be reverted.\n";

        return true;
    }
}
