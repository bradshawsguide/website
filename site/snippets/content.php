<div class="s-prose">
    <?
        snippet('figure');

        if($page->info()->isNotEmpty()) {
            snippet('info');
        } else {
            // temporary
            echo kirbytext($page->meta());
        }

        echo kirbytext($page->text());

        if($page->distances()->isNotEmpty()) {
            snippet('distances');
        }
    ?>
</div>
