<?php

class StationPage extends Kirby\Cms\Page
{
    public function writeContent(array $data, string $languageCode = null): bool
    {
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

    // Trainline slug (uses current day station name stored in subtitle)
    public function trainline(): string
    {
        return $this->subtitle()->isNotEmpty()
            ? Str::slug($this->subtitle())
            : $this->uid();
    }

    // API consistency
    public function links()
    {
        $links = [
            "wikipedia" => $this->wikipedia()->isNotEmpty()
                ? "- (wikipedia: {$this->wikipedia()})"
                : null,
            "nationalrail" => $this->nationalrail()->isNotEmpty()
                ? "- [{$this->title()} Station on National Rail](https://www.nationalrail.co.uk/stations/{$this->nationalrail()})"
                : null,
            "trainline" => $this->nationalrail()->isNotEmpty()
                ? "- [{$this->title()} Station on Trainline](https://www.thetrainline.com/stations/{$this->trainline()})"
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
        // TODO: Update filter to only find routes by exact station UID in
        // array of station UIDs. Currently Brighton and Albrighton are
        // returned as being one in the same.
        return page("routes")
            ->children()
            ->filterBy("stops", "*=", $this->uid());
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
