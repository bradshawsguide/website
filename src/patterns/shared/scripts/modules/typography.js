export default function () {
  const $ = document.querySelector.bind(document);
  const title = $('.c-page__title');
  const prose = $('.c-page__content .s-prose p:first-of-type');

  // http://stackoverflow.com/a/29301739
  // TODO: Only replace within first sentence
  // TODO: Only replace first occurance
  const matchText = function (node, regex, callback, excludeElements) {
    excludeElements || (excludeElements = ['script', 'style', 'iframe', 'canvas']);
    let child = node.firstChild;

    while (child) {
      switch (child.nodeType) {
        case 1:
          if (excludeElements.indexOf(child.tagName.toLowerCase()) > -1) {
            break;
          }
          // FIXME: matchText(child, regex, callback, excludeElements);
          break;
        case 3:
          var bk = 0;
          child.data.replace(regex, function (all) {
            const args = [].slice.call(arguments);
            const offset = args[args.length - 2];
            const newTextNode = child.splitText(offset + bk);
            var tag;
            bk -= child.data.length + all.length;

            newTextNode.data = newTextNode.data.substr(all.length);
            tag = callback.apply(window, [child].concat(args));
            child.parentNode.insertBefore(tag, newTextNode);
            child = newTextNode;
          });
          regex.lastIndex = 0;
          break;
        default:
          // Do nothing
      }

      child = child.nextSibling;
    }

    return node;
  };

  if (prose) {
    const placename = title.textContent.replace(/\s+/g, '');

    matchText(prose, new RegExp('\\b' + placename + '\\b'), (node, match) => {
      const span = document.createElement('span');
      span.className = 'smcp';
      span.textContent = match;
      return span;
    });
  }
}
