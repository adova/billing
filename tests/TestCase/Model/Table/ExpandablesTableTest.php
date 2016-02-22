<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExpandablesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExpandablesTable Test Case
 */
class ExpandablesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExpandablesTable
     */
    public $Expandables;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.expandables',
        'app.users',
        'app.informations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Expandables') ? [] : ['className' => 'App\Model\Table\ExpandablesTable'];
        $this->Expandables = TableRegistry::get('Expandables', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Expandables);

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
