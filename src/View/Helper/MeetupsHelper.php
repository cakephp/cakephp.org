<?php

namespace App\View\Helper;

use Cake\Core\Configure;
use Cake\I18n\Time;
use Cake\Utility\Hash;
use Cake\View\Helper;

class MeetupsHelper extends Helper
{
    public $helpers = ['Html'];

    public function meetups(): string
    {
        $out = '';
        $meetups = Configure::read('Site.meetups');
        foreach ($meetups as $meetup) {
            if (Time::parse($meetup['when'])->isPast()) {
                continue;
            }
            $out .= $this->meetup($meetup);
        }

        return $this->Html->tag('div', $out, ['class' => 'meetups']);
    }

    public function meetup(array $meetup): string
    {
        $meetupContent = $this->Html->link(
            __($meetup['title'] ?? null),
            $meetup['where']['url'] ?? '/',
            ['class' => 'title']
        );
        $meetupContent .= $this->Html->tag(
            'div',
            $meetup['when'] ?? null,
            ['class' => 'when']
        );
        $meetupContent .= $this->meetupLink($meetup, 'hosted-by', __('Hosted by: '));
        $meetupContent .= $this->meetupLink($meetup, 'where', __('Meeting link: '));
        $meetupContent .= $this->Html->tag(
            'pre',
            $meetup['description'] ?? null,
            ['class' => 'description']
        );
        $meetupContent .= $this->Html->tag('hr', null);

        return $this->Html->tag('div', $meetupContent, ['class' => 'meetup']);
    }

    protected function meetupLink(array $meetup, string $field, string $pre = ''): string
    {
        return $this->Html->tag('br') .
            $this->Html->tag('span', $pre) .
            $this->Html->link(
                $meetup[$field]['name'] ?? '',
                $meetup[$field]['url'] ?? '/',
                [
                    'class' => $field,
                    'target' => '_blank',
                ]
            );
    }
}
