<? snippet('header') ?>
<? snippet('banner') ?>

    <main role="main">
        <div class="container">
            <hgroup>
                <h1><?= smartypants($page->title()) ?></h1>
                <h2><a href="/counties/<?= str::urlify($page->county()) ?>"><?= smartypants($page->county()) ?></a></h2>
            </hgroup>

            <?= preg_replace('/^(<.+?>\s*)+?(\w+)/i', '\1<span class="first-word">\2</span>', kirbytext($page->text())); ?>

            <aside>
                <h1>About this station</h1>
                <?= kirbytext($page->meta()) ?>

                <? if($page->hasImages()): ?>
                <figure>
                    <? foreach($page->images() as $image): ?>
                    <img src="<?= $image->url() ?>" alt="<?= $image->title() ?>" width="360"/> 
                    <figcaption>
                        <p><?= $image->caption() ?></p>
                    </figcaption>
                    <? endforeach ?>
                </figure>
                <? endif ?>
            </aside>

            <nav role="navigation">
                <h1>Lines that pass through this station</h1>
                <ul>
                <? foreach(related($page->line()) as $lines): ?>
                    <li><a href="<?= $lines->url() ?>"><?= smartypants($lines->title().' '.$lines->type()) ?></a></li>
                <? endforeach ?>
                </ul>
            </nav>
            
            <section>
                <h1>Short URL</h1>
                <a href="<?= $page->tinyurl() ?>"><?= str::shorturl($page->tinyurl()) ?></a>
            </section>
            
            <nav class="prevnext">
                <a href="<?= $page->prev()->url() ?>" rel="prev"><?= $page->prev()->title() ?></a>
                <a href="<?= $page->next()->url() ?>" rel="next"><?= $page->next()->title() ?></a>
            </nav>
        </div>
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>