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
    <link rel="icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Playfair+Display+SC:400,900|Gentium+Basic">
    <? $lesscss = lesscss('/assets/styles/less/styles.less','/assets/styles/styles.css') ?>
<?= css('assets/styles/styles.css') ?>

    <script type="text/javascript">
        // https://gist.github.com/irae/1042167
        (function(document,navigator,standalone) {
            // prevents links from apps from oppening in mobile safari
            // this javascript must be the first script in your <head>
            if ((standalone in navigator) && navigator[standalone]) {
                var curnode, location=document.location, stop=/^(a|html)$/i;
                document.addEventListener('click', function(e) {
                    curnode=e.target;
                    while (!(stop).test(curnode.nodeName)) {
                        curnode=curnode.parentNode;
                    }
                    // Condidions to do this only on links to your own app
                    // if you want all links, use if('href' in curnode) instead.
                    if(
                        'href' in curnode && // is a link
                        // (chref=curnode.href).replace(location.href,'').indexOf('#') && is not an anchor
                        (    !(/^[a-z\+\.\-]+:/i).test(chref) ||                       // either does not have a proper scheme (relative links)
                            chref.indexOf(location.protocol+'//'+location.host)===0 ) // or is in the same protocol and domain
                    ) {
                        e.preventDefault();
                        location.href = curnode.href;
                    }
                },false);
            }
        })(document,window.navigator,'standalone');
    </script>
</head>

<body>
