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

    if ($page->title_today()) {
        echo '<p><em>'.$page->title_today().'</em></p>';
    }

    echo '<p><code>Country: '.$page->country().'</code></p>';
    echo '<p><code>Region: '.$page->region().'</code></p>';

    echo '<code>';
    echo '&lt;meta name="ICBM" content="'.$page->geolat().', '.$page->geolng().'"&gt;<br/>';
    echo '&lt;meta name="geo.position" content="'.$page->geolat().';'.$page->geolng().'"&gt;<br/>';
    echo '&lt;meta name="geo.region" content="country[-state]"&gt;';
    echo '&lt;!--GB-ENG, GB-WLS, GB-SCT, GB-NIR, IE, GG, JE--&gt;<br/>';
    echo '&lt;meta name="geo.placename" content="'.$page->title().'"&gt;';
    echo '</code>';

    if ($page->code()) {
        if ($page->title_today()) {
            $title = $page->title_today();
            $slug = str::slug($page->title_today());
        } else {
            $title = $page->title();
            $slug = $page->uid();
        }
        $trainline = brick('a');
        $trainline->attr('href', 'https://www.thetrainline.com/stations/'.$slug);
        $trainline->html($title.' station on the Trainline');
        echo '<p>'.$trainline.'</p>';
    }

    if ($page->wikipedia()) {
        if ($page->title_today()) {
            $title = $page->title_today();
        } else {
            $title = $page->title();
        }
        $wiki = brick('a');
        $wiki->attr('href', 'https://en.wikipedia.org/wiki/'.$page->wikipedia());
        $wiki->html($title.' station on Wikipedia');
        echo '<p>'.$wiki.'</p>';
    }

    if ($page->disused()) {
        $disused = brick('a');
        $disused->attr('href', 'http://www.disused-stations.org.uk/'.$page->disused());
        $disused->html('Site record on Disused Stations');
        echo '<p>'.$disused.'</p>';
    }
};
