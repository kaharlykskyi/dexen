<?php

use yii\db\Migration;

/**
 * Handles the creation of table `position`.
 */
class m170521_154903_create_position_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        Yii::$app->db->createCommand('
            CREATE TABLE `position` (
            `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
            `order_id` INT(11) UNSIGNED NOT NULL,
            `type_table` VARCHAR(50) NOT NULL,
            `product_id` INT(11) UNSIGNED NOT NULL,
            `count` TINYINT(3) UNSIGNED NOT NULL,
            `status` TINYINT(10) UNSIGNED NOT NULL
            );
            ALTER TABLE `position` ADD CONSTRAINT `fk_position_order`
            FOREIGN KEY (`order_id`)
            REFERENCES `order` (`id`)
            ON DELETE CASCADE 
            ON UPDATE NO ACTION;
        ')->execute();
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('position');
    }
}
