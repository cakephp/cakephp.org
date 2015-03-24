<?php
namespace App\View\Cell;

use Cake\View\Cell;
use PicoFeed\PicoFeedException;
use PicoFeed\Reader\Reader;

class NewsCell extends Cell
{
    public function recent()
    {
        $feed = $this->_feed();

        $articles = [];
        for ($i = 0; $i < 3; $i++) {
            $articles[] = [
                'name' => $feed->items[$i]->getTitle(),
                'date' => $feed->items[$i]->getDate(),
                'body' => current(explode('. ', $feed->items[$i]->getContent())) . '.</p>',
                'link' => $feed->items[$i]->getUrl(),
            ];
        }
        $this->set(compact('articles'));
    }

    public function index()
    {
        $feed = $this->_feed();

        $articles = [];
        foreach ($feed->items as $item) {
            $articles[] = [
                'name' => $item->getTitle(),
                'date' => $item->getDate(),
                'body' => $item->getContent(),
                'link' => $item->getUrl(),
            ];
        }
        $this->set(compact('articles'));
    }

    protected function _feed() {
        try {
            $reader = new Reader;

            // Return a resource
            $resource = $reader->download('http://bakery.cakephp.org/articles/category/news.rss');

            // Return the right parser instance according to the feed format
            $parser = $reader->getParser(
                $resource->getUrl(),
                $resource->getContent(),
                $resource->getEncoding()
            );

            // Return a Feed object
            return $parser->execute();
        } catch (PicoFeedException $e) {
            // Do Something...
        }
    }
}
