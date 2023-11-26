<?php

use Kirby\Uuid\Uuid;

class StationsPage extends Kirby\Cms\Page
{
    public function children(): Pages
    {
        if ($this->children instanceof Pages) {
            return $this->children;
        }

        $stations = [];

        foreach (Db::select('stations') as $station) {
            $stations[] = [
                'slug'     => $station->uid(),
                'num'      => 0,
                'template' => 'station',
                'model'    => 'station',
                'content'  => [
                    'title' => $station->title(),
                    'subtitle' => $station->subtitle(),
                    'country' => $station->country(),
                    'region' => $station->region(),
                    'place' => $station->place(),
                    'wikipedia' => $station->wikipedia(),
                    'disused' => $station->disused(),
                    'nationalrail' => $station->nationalrail(),
                    'location' => $station->location()
                ]
            ];
        }

        return Pages::factory($stations, $this);
    }
}
