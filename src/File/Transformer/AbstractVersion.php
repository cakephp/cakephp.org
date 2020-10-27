<?php
namespace App\File\Transformer;

use Imagine\Imagick\Imagine;
use InvalidaArgumentException;

abstract class AbstractVersion
{
    /**
     * @var string
     */
    const MOCKS_DIR = 'screen_mocks';

    /**
     * @var string
     */
    const EXT = '.jpg';

    /**
     * @return Point
     */
    abstract public function getPoint();

    /**
     * @return string Mock filename
     */
    abstract public function getMock();

    /**
     * @return Box
     */
    abstract public function getResizeBox();

    /**
     * Constructor
     *
     * @param array $data data
     */
    public function __construct($data)
    {
        if (empty($data['tmp_name']) || empty($data['name'])) {
            throw new InvalidaArgumentException('You should provide an array with `tmp_name` and `name`');
        }

        $this->data = $data;
    }

    /**
     * Generates the result image
     *
     * @return string filename
     */
    public function generate()
    {
        $mockFilename = $this->mockPath();

        $imagine = new Imagine($mockFilename);

        $mock = $imagine->open($mockFilename);
        $uploaded = $imagine->open($this->data['tmp_name']);

        $mock->paste($uploaded->resize($this->getResizeBox()), $this->getPoint());

        $dest = $this->getDestFilename($this->data['tmp_name']);
        $mock->save($dest);

        return [$dest => $this->getDestFilename($this->data['name'])];
    }

    /**
     * @return string
     */
    private function mockPath()
    {
        return ROOT . DS . self::MOCKS_DIR . DS . $this->getMock();
    }

    /**
     * @return string
     */
    private function extractSuffix()
    {
        $arr = explode('.', $this->getMock());

        return $arr[0];
    }

    /**
     * @param string $name name
     * @return string
     */
    private function getDestFilename($name)
    {
        $name = explode('.', $name);
        $name = $name[0];

        return $name . $this->extractSuffix() . self::EXT;
    }
}
