<? foreach($results as $result): ?>
<article class="c-result">
  <a class="u-block" href="<?= $result->url() ?>">
    <h2 class="c-result__title">
      <span class="u-block__link"><?= html($result->title()); ?></span>
      <span class="u-hidden">(</span>
      <em class="c-result__type"><?= str::ucfirst($result->content()->name()) ?></em>
      <span class="u-hidden">)</span>
    </h2>
    <div class="c-result__desc s-prose">
      <p><?= excerpt($result->text(), $length=140); ?></p>
    </div>
    <p class="c-result__url"><?= server::get('server_name'); ?><?= $result->url() ?></p>
  </a>
</article>
<? endforeach ?>
