<?php

class RoutePage extends Kirby\Cms\Page
{
    // Return subtitle
    public function operators()
    {
        $companies = [];

        // Convert pages listed under `company:` to HTML links
        foreach ($this->company()->toPages() as $company) {
            $company = Html::a($company->url(), $company->title());
            array_push($companies, $company);
        }

        // If route jointly operated, show links to both companies
        if (size($companies) > 1) {
            $operators = implode(" & ", $companies) . " (Joint)";
        } else {
            $operators = $companies[0];
        }

        return $operators;
    }

    // Return `line` name if exists, else defer to company title
    // Required by patterns/common/route
    public function lineTitle()
    {
        return $this->subtitle()->isNotEmpty()
            ? $this->subtitle()
            : $this->company()->toPage()->title();
    }
}
