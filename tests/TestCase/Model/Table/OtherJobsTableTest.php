<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OtherJobsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OtherJobsTable Test Case
 */
class OtherJobsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OtherJobsTable
     */
    public $OtherJobs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.other_jobs',
        'app.cvs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OtherJobs') ? [] : ['className' => OtherJobsTable::class];
        $this->OtherJobs = TableRegistry::getTableLocator()->get('OtherJobs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OtherJobs);

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
