<?php

class RoutePage extends Page
{
    // Return subtitle
    public function subtitle()
    {
        $companies = $this->company()->yaml();

        // Convert UIDs listed under `company:` to HTML links
        array_walk($companies, function (&$value, $key) {
            $page = page('companies/'.$value);
            $value = html::a($page->url(), $page->title());
        });

        // If route jointly operated, show links to both companies
        if (count($companies) > 1) {
            $companyLink = implode(' & ', $companies).' (Joint)';
        } else {
            $companyLink = $companies[0];
        };

        // If route has a line name, show that after company name
        if (!$this->line()->empty()) {
            $subtitle = $this->line()."&#160;—&#160;".$companyLink;
        } else {
            $subtitle = $companyLink;
        };

        return $subtitle;
    }

    // Return `title_short` if exists, else normal title
    public function shortTitle()
    {
        if (!$this->title_short()->empty()) {
            $shortTitle = $this->title_short();
        } else {
            $shortTitle = $this->title();
        };

        return $shortTitle;
    }

    // Return `line` name if exists, else defer to company title
    public function currentTitle()
    {
        if (!$this->line()->empty()) {
            $currentTitle = $this->line();
        } else {
            $currentTitle = page('companies/'.$this->company())->title();
        };

        return $currentTitle;
    }

    // Return `desc` if exists, else excerpt of text
    public function excerpt()
    {
        if (!$this->desc()->empty()) {
            $excerpt = $this->desc();
        } else {
            $excerpt = excerpt($this->text(), $length = 40, $mode = 'words');
        };

        return $excerpt;
    }
}
