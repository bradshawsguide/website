export default function() {
  const $ = document.querySelector.bind(document);
  const title = $('.c-page__title');
  const prose = $('.c-page__content .s-prose p:first-of-type');
  const placename = title.textContent.replace(/\s+/g, '');

  // http://stackoverflow.com/a/29301739
  // TODO: Only replace within first sentence
  // TODO: Only replace first occurance
  var matchText = function(node, regex, callback, excludeElements) {
    excludeElements || (excludeElements = ['script', 'style', 'iframe', 'canvas']);
    var child = node.firstChild;

    while (child) {
      switch (child.nodeType) {
      case 1:
        if (excludeElements.indexOf(child.tagName.toLowerCase()) > -1)
          break;
        //matchText(child, regex, callback, excludeElements);
        break;
      case 3:
        var bk = 0;
        child.data.replace(regex, function(all) {
          var args = [].slice.call(arguments);
          var offset = args[args.length - 2];
          var newTextNode = child.splitText(offset+bk);
          var tag;
          bk -= child.data.length + all.length;

          newTextNode.data = newTextNode.data.substr(all.length);
          tag = callback.apply(window, [child].concat(args));
          child.parentNode.insertBefore(tag, newTextNode);
          child = newTextNode;
        });
        regex.lastIndex = 0;
        break;
      }

      child = child.nextSibling;
    }

    return node;
  };

  matchText(prose, new RegExp('\\b' + placename + '\\b'), function(node, match, offset) {
    var span = document.createElement('span');
    span.className = 'u-smcp';
    span.textContent = match;
    return span;
  });
}
