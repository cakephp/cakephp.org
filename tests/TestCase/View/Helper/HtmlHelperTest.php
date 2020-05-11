<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\HtmlHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\HtmlHelper Test Case
 */
class HtmlHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\HtmlHelper
     */
    public $Html;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Html = new HtmlHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Html);

        parent::tearDown();
    }

    /**
     * @test
     */
    public function testLinkTargetBlank()
    {
        $link = $this->Html->link('example', '/', ['target' => '_blank']);
        $this->assertSame('<a href="/" target="_blank" rel="noopener noreferrer">example</a>', $link);

        $link = $this->Html->link('example', '/', ['target' => '_blank', 'rel' => 'something']);
        $this->assertSame('<a href="/" target="_blank" rel="something">example</a>', $link);
    }

    /**
     * @test
     */
    public function testLinkNoTarget()
    {
        $link = $this->Html->link('example', '/');
        $this->assertSame('<a href="/">example</a>', $link);

        $link = $this->Html->link('example', '/', ['rel' => 'something']);
        $this->assertSame('<a href="/" rel="something">example</a>', $link);
    }
}
