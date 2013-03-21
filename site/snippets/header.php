<!DOCTYPE html>
<html lang="en-gb">
<head>
    <title><?php if ($page->isHomePage() == false) : ?><?= smartypants($page->title()) ?> - <?php endif ?><?= smartypants($site->title()) ?></title>
    <meta charset="utf-8" />
    <meta name="description" content="<?= html($site->description()) ?>"/>
    <meta name="keywords" content="<?= html($site->keywords()) ?>"/>
    <meta name="robots" content="index, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="application-name" content="<?= smartypants($site->shorttitle()) ?>">
    <meta name="apple-mobile-web-app-title" content="<?= smartypants($site->shorttitle()) ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="apple-touch-icon-precomposed" href="<?= url('assets/images/apple-touch-icon.png') ?>"/>
    <link rel="apple-touch-startup-image" href="<?= url('assets/images/apple-touch-startup-image.png') ?>" media="(device-width: 320px)"/>
    <link rel="apple-touch-startup-image" href="<?= url('assets/images/apple-touch-startup-image@2x.png') ?>" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)">
    <link rel="icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png"/>
    <? $lesscss = lesscss('/assets/styles/less/styles.less','/assets/styles/styles.css') ?>
<?= css('assets/styles/styles.css') ?>

    <script type="text/javascript">
        // https://gist.github.com/irae/1042167
        (function(document,navigator,standalone) {
            if ((standalone in navigator) && navigator[standalone]) {
                var curnode, location=document.location, stop=/^(a|html)$/i;
                document.addEventListener('click', function(e) {
                    curnode=e.target;
                    while (!(stop).test(curnode.nodeName)) {
                        curnode=curnode.parentNode;
                    }
                    if('href' in curnode) {
                        e.preventDefault();
                        location.href = curnode.href;
                    }
                },false);
            }
        })(document,window.navigator,'standalone');
    </script>
</head>

<body>
