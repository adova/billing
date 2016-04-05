<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PackageUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PackageUsersTable Test Case
 */
class PackageUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PackageUsersTable
     */
    public $PackageUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.package_users',
        'app.users',
        'app.expandables',
        'app.informations',
        'app.packages',
        'app.previous_packages',
        'app.generates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PackageUsers') ? [] : ['className' => 'App\Model\Table\PackageUsersTable'];
        $this->PackageUsers = TableRegistry::get('PackageUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PackageUsers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
