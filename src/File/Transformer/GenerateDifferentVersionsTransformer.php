<?php
namespace App\File\Transformer;

use Josegonzalez\Upload\File\Transformer\DefaultTransformer;

class GenerateDifferentVersionsTransformer extends DefaultTransformer
{
    /**
     * @return array
     */
    public function transform()
    {
        $result = parent::transform();

        $slider = new SliderVersion($this->data);
        $highlight = new HighlightVersion($this->data);
        $small = new SmallVersion($this->data);

        $result = parent::transform();

        foreach ([$slider, $highlight, $small] as $version) {
            $result = array_merge($result, $version->generate());
        }

        return $result;
    }
}
