<?
    if (!isset($_GET['ajax'])) {
        snippet('navigation');
        snippet('search');
        snippet('contentinfo');
        snippet('footer');
    }
?>