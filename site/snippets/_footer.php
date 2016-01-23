    </main>

    <? snippet('navigation') ?>
    <? snippet('search') ?>
    <? snippet('contentinfo') ?>
    <? //snippet('analytics') ?>

    <? // Only load browser-sync script if viewing locally
        $whitelist = array('127.0.0.1', '::1');
        if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
            snippet('browser-sync');
        }
    ?>
</body>
</html>
