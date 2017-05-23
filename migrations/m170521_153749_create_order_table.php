<?php

use yii\db\Migration;

/**
 * Handles the creation of table `order`.
 */
class m170521_153749_create_order_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        Yii::$app->db->createCommand('
            CREATE TABLE `order` (
            `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `first_name` VARCHAR(255) NOT NULL,
            `last_name` VARCHAR(255) NOT NULL,
            `email` VARCHAR(255) NOT NULL,
            `city` VARCHAR(255) NOT NULL,
            `region` VARCHAR(255) NOT NULL,
            `address` MEDIUMTEXT NOT NULL,
            `tel` VARCHAR(50) NOT NULL,
            `pay_type` VARCHAR(50) NOT NULL,
            `comment` TEXT,
            `status` TINYINT(10) UNSIGNED NOT NULL
            );
        ')->execute();
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('order');
    }
}
