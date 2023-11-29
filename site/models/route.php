<?php

class RoutePage extends Kirby\Cms\Page
{
    // Return subtitle
    public function operator()
    {
        $companies = [];

        // Convert pages listed under `company:` to HTML links
        foreach ($this->company()->toPages() as $company) {
            $company = Html::a($company->url(), $company->title());
            array_push($companies, $company);
        }

        // If route jointly operated, show links to both companies
        if (size($companies) > 1) {
            $operator = implode(" & ", $companies) . " (Joint)";
        } else {
            $operator = $companies[0];
        }

        return $operator;
    }

    // Return `line` name if exists, else defer to company title
    // Required by patterns/common/route
    public function lineTitle()
    {
        return $this->subtitle()->isNotEmpty()
            ? $this->subtitle()
            : $this->company()
                ->toPage()
                ->title();
    }
}
