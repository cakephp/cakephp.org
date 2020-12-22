<?php

namespace App\File\Transformer;

use Imagine\Image\Box;
use Imagine\Image\Point;

class SmallVersion extends AbstractVersion
{
    const WIDTH = 155;
    const HEIGHT = 85;
    const POS_X = 7;
    const POS_Y = 11;
    const MOCK_FILENAME = 'small.jpg';

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
