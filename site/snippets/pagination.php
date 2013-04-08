            <nav class="pagination">
                <p class="count">
                    <strong><?php echo $pagination->countItems() ?></strong> results.
<?              if($pagination->hasNextPage()): ?>
                    Showing <strong><?php echo $pagination->numStart() ?></strong> - <strong><?php echo $pagination->numEnd() ?></strong>
<?              endif ?>
                </p>
<?          if($pagination->countItems() > $pagination->numEnd()): ?>
                <p class="pages">
<?              if($pagination->hasPrevPage()): ?>
                <a rel="prev" href="<?= str_replace('&ajax=1', '', $pagination->prevPageURL()) ?>">Previous</a>
<?              endif ?>

<?              if($pagination->hasNextPage()): ?>
                <a rel="next" href="<?= str_replace('&ajax=1', '', $pagination->nextPageURL()) ?>">Next</a>
<?              endif ?>
                </p>
<?          endif ?>
            </nav><!--/.pagination-->
