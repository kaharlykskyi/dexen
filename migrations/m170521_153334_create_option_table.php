<?php

use yii\db\Migration;

/**
 * Handles the creation of table `option`.
 */
class m170521_153334_create_option_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        Yii::$app->db->createCommand('
            CREATE TABLE `option` (
            `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
            `product_type` CHAR(1) NOT NULL,
            `field_name` VARCHAR(45) NOT NULL,
            `json` TEXT NOT NULL,
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
        $this->dropTable('option');
    }
}
