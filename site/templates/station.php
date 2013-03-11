<? snippet('header') ?>
<? snippet('banner') ?>

    <main role="main">
        <section class="container">
            <header>
                <hgroup>
                    <h1><?= smartypants($page->title()) ?></h1>
                    <h2><a href="/counties/<?= str::urlify($page->county()) ?>"><?= smartypants($page->county()) ?></a></h2>
                </hgroup>
            </header>

            <? if ($page->text() != ''): ?>
            <div class="prose">
                <? if($page->hasImages()): ?>
                <aside>
                    <figure>
                        <? foreach($page->images() as $image): ?>
                        <img src="<?= $image->url() ?>" alt="<?= $image->title() ?>" width="360"/> 
                        <figcaption>
                            <p><?= $image->caption() ?></p>
                        </figcaption>
                        <? endforeach ?>
                    </figure>
                </aside>
                <? endif ?>
                <?= preg_replace('/^(<.+?>\s*)+?(\w+)/i', '\1<span class="first-word">\2</span>', kirbytext($page->text())); ?>
            </div>
            <? endif ?>

            <footer class="meta">
                <? if ($page->meta() != ''): ?>
                <section>
                    <h1 class="hidden">About this station</h1>
                    <?= kirbytext($page->meta()) ?>
                </section>
                <? endif ?>

                <nav role="navigation">
                    <h1 class="hidden">Connecting lines</h1>
                    <p>Lines serving this station:</p>
                    <ul>
                    <? foreach(related($page->line()) as $lines): ?>
                        <li><a href="<?= $lines->url() ?>"><?= smartypants($lines->title().' '.$lines->type()) ?></a></li>
                    <? endforeach ?>
                    </ul>
                </nav>
            </footer>

            <? snippet('shorturl') ?>
            <? snippet('prevnext') ?>
        </section>
    </main><!--/@main-->

<? snippet('navigation') ?>
<? snippet('search') ?>
<? snippet('contentinfo') ?>
<? snippet('footer') ?>