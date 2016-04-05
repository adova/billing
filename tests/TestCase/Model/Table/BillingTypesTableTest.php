<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillingTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillingTypesTable Test Case
 */
class BillingTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BillingTypesTable
     */
    public $BillingTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.billing_types',
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
        $config = TableRegistry::exists('BillingTypes') ? [] : ['className' => 'App\Model\Table\BillingTypesTable'];
        $this->BillingTypes = TableRegistry::get('BillingTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BillingTypes);

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
}
