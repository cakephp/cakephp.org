<?php

namespace App\File\Transformer;

use Imagine\Image\Box;
use Imagine\Image\Point;

class SliderVersion extends AbstractVersion
{
    const WIDTH = 1088;
    const HEIGHT = 594;
    const POS_X = 400;
    const POS_Y = 125;
    const MOCK_FILENAME = 'slider.jpg';

    /**
     * @return Point
     */
    public function getPoint()
    {
        return new Point(self::POS_X, self::POS_Y);
    }

    /**
     * @return string Indicates the mock image
     */
    public function getMock()
    {
        return self::MOCK_FILENAME;
    }

    /**
     * @return Box
     */
    public function getResizeBox()
    {
        return new Box(self::WIDTH, self::HEIGHT);
    }
}
