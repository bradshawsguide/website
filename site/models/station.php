<?php

class StationPage extends Kirby\Cms\Page
{
    public function writeContent(
        array $data,
        ?string $languageCode = null,
    ): bool {
        if ($station = Db::first("stations", "*", ["uid" => $this->uid()])) {
            return Db::update("stations", $data, ["uid" => $this->uid()]);
        } else {
            $data["uid"] = $this->uid();
            return Db::insert("stations", $data);
        }
    }

    public function delete(bool $force = false): bool
    {
        return Db::delete("stations", ["uid" => $this->uid()]);
    }

    // Location for search
    public function geo()
    {
        $location = $this->location()->yaml();
        return $location["lat"] . "," . $location["lon"];
    }

    // Get the current name of the station
    public function modernTitle(): string
    {
        return $this->subtitle()->isNotEmpty()
            ? $this->subtitle()
            : $this->title();
    }

    // API consistency
    public function links()
    {
        $links = [
            "wikipedia" => $this->wikipedia()->isNotEmpty()
                ? "- (wikipedia: {$this->wikipedia()})"
                : null,
            "nationalrail" => $this->nationalrail()->isNotEmpty()
                ? "- [{$this->modernTitle()} Station on National Rail](https://www.nationalrail.co.uk/stations/{$this->nationalrail()})"
                : null,
            "disused" => $this->disused()->isNotEmpty()
                ? "- [Site record on Disused Stations](http://www.disused-stations.org.uk/{$this->disused()})"
                : null,
        ];

        return implode("\n", $links);
    }

    // Convert UIDs listed under `route:` to array of pages
    public function routes()
    {
        // Filters routes to find only those with the exact station UID in
        // their list of stops. For example the station UID `abbey` matches
        // on `- stations/abbey`, but not `- stations/abbey-wood`.
        return page("routes")
            ->children()
            ->filter(function ($child) {
                if ($child->stops()->isNotEmpty()):
                    $uid = "stations/{$this->uid()}";
                    $regex = "/-\s" . preg_quote($uid, "/") . "(?![\w-])/";
                    foreach ($child->stops() as $stop):
                        return preg_match($regex, $stop);
                    endforeach;
                endif;
            });
    }

    public function routesCount()
    {
        $number = new NumberFormatter("en", NumberFormatter::SPELLOUT);
        $routes = size($this->routes());

        if ($routes > 1) {
            $routesCount = $number->format($routes) . " routes";
        } else {
            $routesCount = $number->format($routes) . " route";
        }

        return $routesCount;
    }
}
