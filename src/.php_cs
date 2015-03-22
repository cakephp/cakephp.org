<?php
$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('somedir')
    ->in(__DIR__)
;

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::NONE_LEVEL)
    ->fixers([
        'psr0',
        'psr1',
        'psr2',
        'symfony',
        // remove some symfony
        '-concat_without_spaces',
        '-double_arrow_multiline_whitespaces',
        '-join_function',
        '-multiline_array_trailing_comma',
        '-phpdoc_no_empty_return',
        '-phpdoc_params',
        '-phpdoc_separation',
        // add some contrib
        'concat_with_spaces',
        'ereg_to_preg',
        'no_blank_lines_before_namespace',
        'ordered_use',
        'phpdoc_order',
        'short_array_syntax',
    ])
    ->finder($finder)
;
