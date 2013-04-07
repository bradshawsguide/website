<?
$ignore = array('sitemap', 'error');

// send the right header
header('Content-type: text/xml; charset="utf-8"');

// echo the doctype
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<? foreach($pages->index() as $p): ?> 
<?  if(in_array($p->uri(), $ignore)) continue ?>
    <url>
        <loc><?= html($p->url()) ?></loc>
        <lastmod><?= $p->modified('c') ?></lastmod>
        <priority><?= ($p->isHomePage()) ? 1 : 0.5 ?></priority>
    </url>
<?  endforeach ?>
</urlset>