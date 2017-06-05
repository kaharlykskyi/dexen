<?php
namespace app\models;

class StaticSource {

    /** tables constant */
    const TABLE_CLOCK = 'clock';
    const TABLE_GLASSES = 'glasses';
    const TABLE_PORTMONE = 'portmone';

    /** code table constant */
    const CODE_TABLE_CLOCK = 'c';
    const CODE_TABLE_GLASSES = 'g';
    const CODE_TABLE_PORTMONE = 'p';

    public static $code_table = [
        self::TABLE_CLOCK => self::CODE_TABLE_CLOCK,
        self::TABLE_GLASSES => self::CODE_TABLE_GLASSES,
        self::TABLE_PORTMONE => self::CODE_TABLE_PORTMONE,
    ];

    public static $table_by_code = [
        self::CODE_TABLE_CLOCK => self::TABLE_CLOCK,
        self::CODE_TABLE_GLASSES => self::TABLE_GLASSES,
        self::CODE_TABLE_PORTMONE => self::TABLE_PORTMONE,
    ];

    public static function getModelByType($table)
    {
        switch ($table) {
            case 'c':
                $model = 'Clock';
                break;
            case 'g':
                $model = 'Glasses';
                break;
            case 'p':
                $model = 'Portmone';
                break;
        }
        return $model;
    }
}