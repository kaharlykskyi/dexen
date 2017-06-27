<?php
namespace app\models;

class StaticSource {

    /** tables constant */
    const TABLE_CLOCK = 'product_clock';

    /** code table constant */
    const CODE_TABLE_CLOCK = 'c';

    public static $code_table = [
        self::TABLE_CLOCK => self::CODE_TABLE_CLOCK,
    ];

    public static $table_by_code = [
        self::CODE_TABLE_CLOCK => self::TABLE_CLOCK,
    ];
}