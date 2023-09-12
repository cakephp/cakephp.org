<?php
namespace App\File\Transformer;

use Josegonzalez\Upload\File\Transformer\DefaultTransformer;

class GenerateDifferentVersionsTransformer extends DefaultTransformer
{
    /**
     * @inheritDoc
     */
    public function transform(string $filename): array
    {
        $slider = new SliderVersion($this->data);
        $highlight = new HighlightVersion($this->data);
        $small = new SmallVersion($this->data);

        $result = parent::transform($filename);

        foreach ([$slider, $highlight, $small] as $version) {
            $result = array_merge($result, $version->generate());
        }

        return $result;
    }
}
