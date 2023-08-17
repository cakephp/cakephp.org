<?php
namespace App\File\Transformer;

use Cake\Utility\Text;
use Imagine\Imagick\Imagine;
use InvalidaArgumentException;
use Laminas\Diactoros\Exception\UploadedFileAlreadyMovedException;
use Laminas\Diactoros\UploadedFile;

abstract class AbstractVersion
{
    /**
     * @var \Laminas\Diactoros\UploadedFile
     */
    protected $data;

    /**
     * @var string
     */
    protected $tmpFilePath;

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
     * @param \Laminas\Diactoros\UploadedFile $data data
     */
    public function __construct(UploadedFile $data)
    {
        if ($data->getError() !== UPLOAD_ERR_OK) {
            throw new \InvalidArgumentException('Invalid uploaded file');
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
        $uploaded = $imagine->open($this->data->getStream()->getMetadata('uri'));

        $mock->paste($uploaded->resize($this->getResizeBox()), $this->getPoint());

        $dest = $this->getDestFilename($this->data->getStream()->getMetadata('uri'));
        $mock->save($dest);

        return [$dest => $this->getDestFilename($this->data->getClientFilename())];
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
        $type = $name[1];
        $name = $name[0];

        return $name . $this->extractSuffix() . '.' . $type;
    }
}
