<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('billing_types');
        $table
            ->addColumn('name', 'integer', [
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('active', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('expandables');
        $table
            ->addColumn('field_name', 'string', [
                'default' => null,
                'limit' => 32,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $table = $this->table('generates');
        $table
            ->addColumn('package_user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('billing_type_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('active', 'integer', [
                'default' => null,
                'limit' => 4,
                'null' => false,
            ])
            ->addIndex(
                [
                    'billing_type_id',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'package_user_id',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'billing_type_id',
                ]
            )
            ->addIndex(
                [
                    'package_user_id',
                ]
            )
            ->create();

        $table = $this->table('informations');
        $table
            ->addColumn('value', 'string', [
                'default' => null,
                'limit' => 64,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('expandable_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'expandable_id',
                ]
            )
            ->create();

        $table = $this->table('package_users');
        $table
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('package_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('active', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'package_id',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'user_id',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'package_id',
                ]
            )
            ->addIndex(
                [
                    'user_id',
                ]
            )
            ->create();

        $table = $this->table('packages');
        $table
            ->addColumn('package_name', 'string', [
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn('ammount', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('status', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'comment' => '0=Inactive,1=Active ',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('previous_packages');
        $table
            ->addColumn('package_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('ammount', 'decimal', [
                'default' => null,
                'null' => false,
                'precision' => 10,
                'scale' => 2,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'package_id',
                ]
            )
            ->create();

        $table = $this->table('users');
        $table
            ->addColumn('first_name', 'string', [
                'default' => null,
                'limit' => 64,
                'null' => false,
            ])
            ->addColumn('last_name', 'string', [
                'default' => null,
                'limit' => 64,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 128,
                'null' => false,
            ])
            ->addColumn('phone', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('address', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('role', 'integer', [
                'comment' => '1 = Admin
2 = Bill Collector
3 = User',
                'default' => null,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('status', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('expandables')
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

        $this->table('generates')
            ->addForeignKey(
                'billing_type_id',
                'billing_types',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'package_user_id',
                'package_users',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('informations')
            ->addForeignKey(
                'expandable_id',
                'expandables',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('package_users')
            ->addForeignKey(
                'package_id',
                'packages',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'CASCADE'
                ]
            )
            ->addForeignKey(
                'user_id',
                'users',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'CASCADE'
                ]
            )
            ->update();

        $this->table('previous_packages')
            ->addForeignKey(
                'package_id',
                'packages',
                'id',
                [
                    'update' => 'RESTRICT',
                    'delete' => 'RESTRICT'
                ]
            )
            ->update();

    }

    public function down()
    {
        $this->table('expandables')
            ->dropForeignKey(
                'user_id'
            );

        $this->table('generates')
            ->dropForeignKey(
                'billing_type_id'
            )
            ->dropForeignKey(
                'package_user_id'
            );

        $this->table('informations')
            ->dropForeignKey(
                'expandable_id'
            );

        $this->table('package_users')
            ->dropForeignKey(
                'package_id'
            )
            ->dropForeignKey(
                'user_id'
            );

        $this->table('previous_packages')
            ->dropForeignKey(
                'package_id'
            );

        $this->dropTable('billing_types');
        $this->dropTable('expandables');
        $this->dropTable('generates');
        $this->dropTable('informations');
        $this->dropTable('package_users');
        $this->dropTable('packages');
        $this->dropTable('previous_packages');
        $this->dropTable('users');
    }
}
