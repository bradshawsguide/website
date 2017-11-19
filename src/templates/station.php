<?php

// If station relates to a place, redirect to corresponding page
if ($page->place()) {
    if ($route = get('route')) {
        $route = '?route='.$route;
    }
    redirect::to('places/'.$page->country().DS.$page->region().DS.$page->place().$route);
} else {
    pattern('common/page/header', [
        'title' => $page->title(),
        'parent' => page('stations')
    ]);

    if ($page->location()) {
        echo '<p><code>Location: '.$page->location().'</code></p>';
        echo '<p><code>Country: '.$page->country().'</code></p>';
        echo '<p><code>Region: '.$page->region().'</code></p>';
    };

    if ($page->wikipedia()) {
        $wiki = brick('a');
        $wiki->attr('href', 'https://en.wikipedia.org/wiki/'.$page->wikipedia());
        $wiki->html($page->title().' station on Wikipedia');
        echo '<p>'.$wiki.'</p>';
    }

    if ($page->disused()) {
        $disused = brick('a');
        $disused->attr('href', 'http://www.disused-stations.org.uk/'.$page->disused());
        $disused->html('Site record on Disused Stations');
        echo '<p>'.$disused.'</p>';
    }
};
