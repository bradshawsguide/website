            <nav class="pagination">
<?          if($pagination->hasPrevPage()): ?>
                <a rel="prev" href="<?= $pagination->prevPageURL() ?>">Previous page</a>
<?          endif ?>

<?          if(isset($range) && $pagination->countPages() > 1): ?>
<?              foreach($pagination->range($range) as $r): ?>
                <a class="range" href="<?= $pagination->pageURL($r) ?>"><?php echo ($pagination->page() == $r) ? '<strong>' . $r . '</strong>' : $r ?></a>
<?              endforeach ?>
<?          endif ?>

<?          if($pagination->hasNextPage()): ?>
                <a rel="next" href="<?= $pagination->nextPageURL() ?>">Next page</a>
<?          endif ?>
            </nav>
