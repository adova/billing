<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneratesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneratesTable Test Case
 */
class GeneratesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneratesTable
     */
    public $Generates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.generates',
        'app.package_users',
        'app.users',
        'app.expandables',
        'app.informations',
        'app.packages',
        'app.previous_packages',
        'app.billing_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Generates') ? [] : ['className' => 'App\Model\Table\GeneratesTable'];
        $this->Generates = TableRegistry::get('Generates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Generates);

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
