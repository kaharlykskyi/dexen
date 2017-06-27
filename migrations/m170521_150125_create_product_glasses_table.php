<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_glasses`.
 */
class m170521_150125_create_product_glasses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {

        Yii::$app->db->createCommand('
            CREATE TABLE `glasses` (
            `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
            `name` VARCHAR(255) NOT NULL,
            `image_main` VARCHAR(255) NOT NULL,
            `images` TEXT NOT NULL,
            `manufacture` INT(11) UNSIGNED NOT NULL,
            `price` INT(11) UNSIGNED NOT NULL,
            `gender` TINYINT(1) UNSIGNED NOT NULL,
            `form` TINYINT(10) UNSIGNED NOT NULL,
            `form_material` TINYINT(10) UNSIGNED NOT NULL,
            `color_form` TINYINT(255) UNSIGNED NOT NULL,
            `lens_material` TINYINT(10) UNSIGNED NOT NULL,
            `color_lens` TINYINT(255) UNSIGNED NOT NULL,
            `in_stock` TINYINT(1) UNSIGNED NOT NULL,
            `count` TINYINT(255) UNSIGNED NOT NULL,
            `display` TINYINT(1) UNSIGNED NOT NULL,
            `purchase_price` INT(11) UNSIGNED NOT NULL,
            `hot_price` INT(11) UNSIGNED NOT NULL DEFAULT 0,
            `description` TEXT NOT NULL
            );
        ')->execute();

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('glasses');
    }
}
