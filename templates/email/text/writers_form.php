<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Writer $writer
 */

echo __('Name') . ': ' . h($writer->name) . "\n";
echo __('Email') . ': ' . h($writer->email) . "\n";
echo __('Username') . ': ' . h($writer->username) . "\n\n";
echo __('Proposed article titles') . ': ' . h($writer->article_titles) . "\n\n";
echo __('Writing sample') . ': ' . h($writer->writing_sample) . "\n\n";
echo __('Extra information') . ': ' . h($writer->extra_information);
