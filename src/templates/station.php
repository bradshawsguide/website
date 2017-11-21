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

    echo '<p><code>Country: '.$page->country().'</code></p>';
    echo '<p><code>Region: '.$page->region().'</code></p>';

    echo '<code>';
    echo '&lt;meta name="ICBM" content="'.$page->geolat().', '.$page->geolng().'"&gt;<br/>';
    echo '&lt;meta name="geo.position" content="'.$page->geolat().';'.$page->geolng().'"&gt;<br/>';
    echo '&lt;meta name="geo.region" content="country[-state]"&gt;';
    echo '&lt;!--GB-ENG, GB-WLS, GB-SCT, GB-NIR, IE, GG, JE--&gt;<br/>';
    echo '&lt;meta name="geo.placename" content="'.$page->title().'"&gt;';
    echo '</code>';

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
