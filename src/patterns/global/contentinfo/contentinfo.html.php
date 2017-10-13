<footer class="c-contentinfo">
  <ul class="c-contentinfo__links">
    <li><a href="/about/">About</a></li>
    <li><a href="/stations/">Stations</a></li>
    <li><a href="/companies/">Companies</a></li>
  </ul>

  <div class="c-contentinfo__social">
    <a rel="me" href="https://twitter.com/bradshawsguide">
      <? pattern('common/icon', [
        'glyph' => 'twitter',
        'label' => 'Follow George Bradshaw on Twitter',
        'size' => 24
      ]) ?>
    </a>
    <a rel="me" href="https://foursquare.com/bradshawsguide">
      <? pattern('common/icon', [
        'glyph' => 'foursquare',
        'label' => 'Follow George Bradshaw on Foursquare',
        'size' => 24
      ]) ?>
    </a>
  </div>

  <p class="c-contentinfo__rights">
    <small>
      Design: © <time datetime="2016" title="2016">MMXVI</time> <a rel="author" href="https://paulrobertlloyd.com">Paul Robert Lloyd</a>.
      Content:&#160;<a rel="license" href="<?= $site->license_url() ?>">Public&#160;Domain</a>
    </small>
  </p>
</footer>
