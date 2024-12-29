<footer class="c-contentinfo">
    <ul>
        <?php foreach (["about", "stations", "companies"] as $item): ?>
            <li>
                <a href="<?= $pages->find($item)->url() ?>">
                    <?= kti($pages->find($item)->title()) ?>
                </a>
            </li>
        <?php endforeach; ?>
        <li>
            <a rel="me" href="https://github.com/bradshawsguide">
                Source code
            </a>
        </li>
    </ul>

    <p>
        <small>
            ©&nbsp;<a rel="author" href="<?= $site->publisher_url() ?>"><?= $site->publisher() ?></a>.
            Content:&nbsp;<a rel="license" href="<?= $site->license_url() ?>"><?= $site->license() ?></a>
        </small>
    </p>
</footer>
