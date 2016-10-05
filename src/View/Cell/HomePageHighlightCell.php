<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * HomePageHighlight cell
 */
class HomePageHighlightCell extends Cell
{

    public $helper = ['Showcase.Showcase'];

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $highlights = $this->loadModel('Projects')->getHighlights();
        $this->set('highlights', $highlights);
    }
}
