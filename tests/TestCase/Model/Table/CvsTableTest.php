<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CvsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CvsTable Test Case
 */
class CvsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CvsTable
     */
    public $Cvs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cvs',
        'app.users',
        'app.educations',
        'app.experiences',
        'app.languajes',
        'app.other_jobs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cvs') ? [] : ['className' => CvsTable::class];
        $this->Cvs = TableRegistry::getTableLocator()->get('Cvs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cvs);

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
