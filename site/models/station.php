<?php

class StationPage extends Kirby\Cms\Page
{
    public function writeContent(array $data, string $languageCode = null): bool
    {
        unset($data["title"]);

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

    // Trainline slug
    public function trainline()
    {
        if ($this->subtitle()->isNotEmpty()) {
            $trainline = Str::slug($this->subtitle());
        } else {
            $trainline = $this->uid();
        }

        return $trainline;
    }

    // Location for search
    public function geo()
    {
        $location = $this->location()->yaml();
        return $location["lat"] . "," . $location["lon"];
    }

    // API consistency
    public function links()
    {
        $links = [
            "wikipedia" => $this->wikipedia()->isEmpty()
                ? null
                : "- (wikipedia: " . urlencode($this->wikipedia()) . ")",
            "trainline" => $this->nationalrail()->isEmpty()
                ? null
                : "- (trainline: " . $this->trainline() . ")",
            "disused" => $this->disused()->isEmpty()
                ? null
                : "- (disused: " . $this->disused() . ")",
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
