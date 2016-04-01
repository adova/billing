<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PreviousPackagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PreviousPackagesTable Test Case
 */
class PreviousPackagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PreviousPackagesTable
     */
    public $PreviousPackages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.previous_packages',
        'app.packages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PreviousPackages') ? [] : ['className' => 'App\Model\Table\PreviousPackagesTable'];
        $this->PreviousPackages = TableRegistry::get('PreviousPackages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PreviousPackages);

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
