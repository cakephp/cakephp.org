<?php
namespace App\Test\TestCase\View\Cell;

use App\View\Cell\HomePageHighlightCell;
use Cake\TestSuite\TestCase;

/**
 * App\View\Cell\HomePageHighlightCell Test Case
 */
class HomePageHighlightCellTest extends TestCase
{

    /**
     * Request mock
     *
     * @var \Cake\Network\Request|\PHPUnit_Framework_MockObject_MockObject
     */
    public $request;

    /**
     * Response mock
     *
     * @var \Cake\Network\Response|\PHPUnit_Framework_MockObject_MockObject
     */
    public $response;

    /**
     * Test subject
     *
     * @var \App\View\Cell\HomePageHighlightCell
     */
    public $HomePageHighlight;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->request = $this->getMockBuilder(\Cake\Network\Request::class)->getMock();
        $this->response = $this->getMockBuilder(\Cake\Network\Response::class)->getMock();
        $this->HomePageHighlight = new HomePageHighlightCell($this->request, $this->response);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HomePageHighlight);

        parent::tearDown();
    }

    /**
     * Test display method
     *
     * @return void
     */
    public function testDisplay()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
