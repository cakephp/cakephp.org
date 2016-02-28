<?php
namespace App\View\Cell;

use Cake\View\Cell;
use PicoFeed\PicoFeedException;
use PicoFeed\Reader\Reader;

class NewsCell extends Cell
{
    public function recent()
    {

        $articles = [];
        $items = $this->_feedItems();
        foreach ($items as $item) {
            if ($i == 3) {
                break;
            }
            $i++;
            $body = $item->getContent();
            // Find the first new line (the title and chop that garbage off.
            $body = substr($body, strpos($body, "\n"));
            $articles[] = [
                'name' => $item[$i]->getTitle(),
                'date' => $item[$i]->getDate(),
                'body' => current(explode('. ', $body)) . '.</p>',
                'link' => $item[$i]->getUrl(),
            ];
        }
        $this->set(compact('articles'));
    }

    public function index()
    {
        $articles = [];
        $items = $this->_feedItems();
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

    protected function _feedItems()
    {
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
