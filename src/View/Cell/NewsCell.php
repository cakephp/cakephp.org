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
            $body = $feed->items[$i]->getContent();
            // Find the first new line (the title and chop that garbage off.
            $body = substr($body, strpos($body, "\n"));
            $articles[] = [
                'name' => $feed->items[$i]->getTitle(),
                'date' => $feed->items[$i]->getDate(),
                'body' => current(explode('. ', $body)) . '.</p>',
                'link' => $feed->items[$i]->getUrl(),
            ];
        }
        $this->set(compact('articles'));
    }

    public function index()
    {
        $items = $this->_feedItems();

        $articles = [];
        foreach ($items as $item) {
            $articles[] = [
                'name' => $item->getTitle(),
                'date' => $item->getDate(),
                'body' => $item->getContent(),
                'link' => $item->getUrl(),
            ];
        }
        $this->set(compact('articles'));
    }

    protected function _feedItems() {
        try {
            $reader = new Reader;

            // Return a resource
            $resource = $reader->download('http://bakery.cakephp.org/articles/category/news.rss');

            if (empty($resource)) {
                return [];
            }

            // Return the right parser instance according to the feed format
            $parser = $reader->getParser(
                $resource->getUrl(),
                $resource->getContent(),
                $resource->getEncoding()
            );

            // Return a Feed object
            return $parser->execute()->items;
        } catch (PicoFeedException $e) {
            // Do Something...
            return [];
        }
    }
}
