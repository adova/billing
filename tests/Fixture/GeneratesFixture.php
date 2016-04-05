<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GeneratesFixture
 *
 */
class GeneratesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'package_user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'billing_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'active' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'package_user_id' => ['type' => 'unique', 'columns' => ['package_user_id'], 'length' => []],
            'billing_type_id' => ['type' => 'unique', 'columns' => ['billing_type_id'], 'length' => []],
            'generates_ibfk_1' => ['type' => 'foreign', 'columns' => ['package_user_id'], 'references' => ['package_users', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'generates_ibfk_2' => ['type' => 'foreign', 'columns' => ['billing_type_id'], 'references' => ['billing_types', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'package_user_id' => 1,
            'billing_type_id' => 1,
            'active' => 1
        ],
    ];
}
