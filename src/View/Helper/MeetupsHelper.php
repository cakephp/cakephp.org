<?php

namespace App\View\Helper;

use Cake\Core\Configure;
use Cake\I18n\FrozenTime;
use Cake\Utility\Hash;
use Cake\View\Helper;

/**
 * @property \App\View\Helper\HtmlHelper $Html
 */
class MeetupsHelper extends Helper
{
    protected $helpers = ['Html'];

    /**
     * @return string
     */
    public function meetups(): string
    {
        $out = '';
        $meetups = Configure::read('Site.meetups');
        foreach ($meetups as $meetup) {
            $when = FrozenTime::parse($meetup['when']);
            if ($when->isPast() && !$when->wasWithinLast('1 day')) {
                continue;
            }
            $out .= $this->meetup($meetup);
        }

        if (!$out) {
            return $this->blank();
        }

        return $this->Html->tag('div', $out, ['class' => 'meetups']);
    }

    /**
     * @param array $meetup meetup
     * @return string
     */
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
        $joinButton = $this->Html->tag(
            'div',
            $this->meetupLink($meetup, 'where', __('Join the meetup here: ')),
            ['class' => 'join']
        );
        $meetupContent .= $this->Html->tag(
            'div',
            (nl2br($meetup['description'] ?? null)) . $joinButton,
            ['class' => 'description']
        );
        $meetupContent .= $this->Html->tag('hr', null);

        return $this->Html->tag('div', $meetupContent, ['class' => 'meetup']);
    }

    /**
     *
     * @param array $meetup meetup
     * @param string $field field
     * @param string $pre prefix
     * @return string
     */
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

    /**
     * @return string
     */
    protected function blank(): string
    {
        $content = $this->Html->tag(
            'h1',
            $this->Html->tag('span', 'V', ['class' => 'glyph_range']) .
            __('{0} {1}', $this->Html->tag('em', __('New Meetup information ')), $this->Html->tag('strong', __('COMING SOON!'))) .
            $this->Html->tag('span', 'V', ['class' => 'glyph_range'])
        );

        $content .= $this->Html->tag(
            'h3',
            __(
                '{0} {1} {2}',
                __('Follow us on Twitter: '),
                $this->Html->link(__('@CakePHP'), '//twitter.com/cakephp', ['target' => '_blank']),
                __('for updates period')
            )
        );

        return $this->Html->tag('div', $content, ['class' => 'col-sm-12 text-center t-team']);
    }
}
