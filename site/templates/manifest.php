{
  "lang": "en-gb",
  "name": "<?= $site->title() ?>",
  "short_name": "<?= $site->short_title() ?>",
  "display": "standalone",
  "start_url": "/",
  "scope": "/",
  "theme_color": "<?= $site->theme_color() ?>",
  "background_color": "<?= $site->background_color() ?>",
  "icons": [{
    "src": "<?= url('assets/icons/icon.png') ?>",
    "sizes": "512x512",
    "type": "image/png"
  }]
}
