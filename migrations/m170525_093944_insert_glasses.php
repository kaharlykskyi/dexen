<?php

use yii\db\Migration;

class m170525_093944_insert_glasses extends Migration
{
    public function up()
    {
        $this->insert('glasses',array(
            'name'=>'Тестовая запись очков #1',
            'image_main' =>'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'images' => 'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'manufacture' => '1',
            'price' => '1200',
            'gender' => '1',
            'form' => '1',
            'form_material' => '2',
            'color_form' => '2',
            'lens_material' => '2',
            'color_lens' => '2',
            'in_stock' => '1',
            'count' => '10',
            'purchase_price' => '800',
            'hot_price' => '1400',
            'display' => '1',
            'description' => 'test',
        ));

        $this->insert('glasses',array(
            'name'=>'Тестовая запись очков #2',
            'image_main' =>'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'images' => 'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'manufacture' => '1',
            'price' => '800',
            'gender' => '1',
            'form' => '1',
            'form_material' => '2',
            'color_form' => '2',
            'lens_material' => '2',
            'color_lens' => '2',
            'in_stock' => '1',
            'count' => '10',
            'purchase_price' => '600',
            'hot_price' => '900',
            'display' => '1',
            'description' => 'test',
        ));

        $this->insert('glasses',array(
            'name'=>'Тестовая запись очков #3',
            'image_main' =>'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'images' => 'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'manufacture' => '1',
            'price' => '1500',
            'gender' => '1',
            'form' => '1',
            'form_material' => '2',
            'color_form' => '2',
            'lens_material' => '2',
            'color_lens' => '2',
            'in_stock' => '1',
            'count' => '10',
            'purchase_price' => '100',
            'hot_price' => '1800',
            'display' => '1',
            'description' => 'test',
        ));

        $this->insert('glasses',array(
            'name'=>'Тестовая запись очков #4',
            'image_main' =>'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'images' => 'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'manufacture' => '1',
            'price' => '1300',
            'gender' => '1',
            'form' => '1',
            'form_material' => '2',
            'color_form' => '2',
            'lens_material' => '2',
            'color_lens' => '2',
            'in_stock' => '1',
            'count' => '10',
            'purchase_price' => '100',
            'hot_price' => '1700',
            'display' => '1',
            'description' => 'test',
        ));

        $this->insert('glasses',array(
            'name'=>'Тестовая запись очков #5',
            'image_main' =>'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'images' => 'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'manufacture' => '1',
            'price' => '1500',
            'gender' => '1',
            'form' => '1',
            'form_material' => '2',
            'color_form' => '2',
            'lens_material' => '2',
            'color_lens' => '2',
            'in_stock' => '1',
            'count' => '10',
            'purchase_price' => '100',
            'hot_price' => '1800',
            'display' => '1',
            'description' => 'test',
        ));

        $this->insert('glasses',array(
            'name'=>'Тестовая запись очков #6',
            'image_main' =>'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'images' => 'https://placeholdit.imgix.net/~text?txtsize=75&txt=250x250&w=250&h=250',
            'manufacture' => '1',
            'price' => '1500',
            'gender' => '1',
            'form' => '1',
            'form_material' => '2',
            'color_form' => '2',
            'lens_material' => '2',
            'color_lens' => '2',
            'in_stock' => '1',
            'count' => '10',
            'purchase_price' => '100',
            'hot_price' => '1800',
            'display' => '1',
            'description' => 'test',
        ));
    }

    public function down()
    {
        echo "m170525_093944_insert_glasses cannot be reverted.\n";

        return true;
    }
}
