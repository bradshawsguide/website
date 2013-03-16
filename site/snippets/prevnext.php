<?php
            if ($page->hasPrev() == true) {
                if ($page->prev()->shorttitle() != null) {
                    $prevTitle = $page->prev()->shorttitle();
                } else {
                    $prevTitle = $page->prev()->title();
                }
            }

            if ($page->hasNext() == true) {
                if ($page->next()->shorttitle() != null) {
                    $nextTitle = $page->next()->shorttitle();
                } else {
                    $nextTitle = $page->next()->title();
                }
            }
?>
            <nav class="prevnext">
                <h1 class="hidden">Previous and Next <?= $page->parent()->title() ?></h1>
<?              if ($page->hasPrev() == true): ?>
                <a href="<?= $page->prev()->url() ?>" rel="prev"><?= $prevTitle ?></a>
<?              endif ?>
<?              if ($page->hasNext() == true): ?>
                <a href="<?= $page->next()->url() ?>" rel="next"><?= $nextTitle ?></a>
<?              endif ?>
            </nav><!--/.prevnext-->
