<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_clock`.
 */
class m170520_153643_create_product_clock_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {

        Yii::$app->db->createCommand('
            CREATE TABLE clock (
            `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
            `name` VARCHAR(255) NOT NULL,
            `image_main` VARCHAR(255) NOT NULL,
            `images` TEXT NOT NULL,
            `manufacture` INT(11) UNSIGNED NOT NULL,
            `price` INT(11) UNSIGNED NOT NULL,
            `gender` TINYINT(1) UNSIGNED NOT NULL,
            `mechanism` INT(11) UNSIGNED NOT NULL,
            `type` TINYINT(255) UNSIGNED NOT NULL,
            `case_material` INT(11) UNSIGNED NOT NULL,
            `case_form` TINYINT(255) UNSIGNED NOT NULL,
            `width` TINYINT(255) UNSIGNED NOT NULL,
            `height` TINYINT(255) UNSIGNED NOT NULL,
            `depth` TINYINT(255) UNSIGNED NOT NULL,
            `water_resistance` TINYINT(255) UNSIGNED NOT NULL,
            `glass` TINYINT(10) UNSIGNED NOT NULL,
            `watchband` TINYINT(10) UNSIGNED NOT NULL,
            `time_display` TINYINT(5) UNSIGNED NOT NULL,
            `dial_symbols`TINYINT(5) UNSIGNED NOT NULL,
            `color_case` TINYINT(255) UNSIGNED NOT NULL,
            `color_watchband` TINYINT(255) UNSIGNED NOT NULL,
            `in_stock` TINYINT(1) UNSIGNED NOT NULL,
            `count` TINYINT(255) UNSIGNED NOT NULL,
            `purchase_price` INT(11) UNSIGNED NOT NULL,
            `hot_price` INT(11) UNSIGNED NOT NULL DEFAULT 0,
            `display` TINYINT(1) UNSIGNED NOT NULL,
            `description` TEXT NOT NULL
            );
        ')->execute();

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('clock');
    }
}
