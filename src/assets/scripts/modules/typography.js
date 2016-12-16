export default function() {
  const $ = document.querySelector.bind(document);
  const openSmcp = '<span class="u-smcp">';
  const closeSpan = '</span>';
  const title = $('.c-page__title');
  const prose = $('.c-page__content .s-prose');
  const placename = title.textContent.replace(/\s+/g, '');

  prose.innerHTML = prose.innerHTML.replace(placename, `${openSmcp}${placename}${closeSpan}`);
}
