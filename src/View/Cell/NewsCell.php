<?php
namespace App\View\Cell;

use Cake\View\Cell;
use PicoFeed\PicoFeedException;
use PicoFeed\Reader\Reader;

class NewsCell extends Cell
{
    public function recent()
    {
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
            $feed = $parser->execute();
        } catch (PicoFeedException $e) {
            // Do Something...
        }

        $articles = [];
        for ($i = 1; $i <= 3; $i++) {
            $articles[] = [
                'name' => $feed->items[$i]->getTitle(),
                'date' => $feed->items[$i]->getDate(),
                'body' => current(explode('. ', $feed->items[$i]->getContent())) . '.</p>',
                'link' => $feed->items[$i]->getUrl(),
            ];
        }
        $this->set(compact('articles'));
    }
}
