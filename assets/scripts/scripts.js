// Add Event
var addEvent = function () {
    return document.addEventListener ? function (a, c, d) {
        if (a && a.nodeName || a === window) a.addEventListener(c, d, !1);
        else if (a && a.length) for (var b = 0; b < a.length; b++) addEvent(a[b], c, d)
    } : function (a, c, d) {
        if (a && a.nodeName || a === window) a.attachEvent("on" + c, function () {
                return d.call(a, window.event)
            });
        else if (a && a.length) for (var b = 0; b < a.length; b++) addEvent(a[b], c, d)
    }
}();

// Open links in place in standalone mode
// https://gist.github.com/irae/1042167
(function(doc,nav,standalone) {
    if ((standalone in nav) && nav[standalone]) {
        var curnode, location=doc.location, stop=/^(a|html)$/i;
        doc.addEventListener('click', function(e) {
            curnode = e.target;
            while (!(stop).test(curnode.nodeName)) {
                curnode = curnode.parentNode;
            }
            if('href' in curnode) {
                e.preventDefault();
                location.href = curnode.href;
            }
        },false);
    }
})(this.document,window.navigator,'standalone');


// Add shadow to element on scroll
(function(win, doc) {
    var start = 10,
        step = 10,
        max = 10,
        color = 'rgba(0,0,0,0.25)',
        top = doc.getElementById('top'),
        setShadow = function() {
            var scroll = (doc.documentElement.scrollTop)? doc.documentElement.scrollTop : doc.body.scrollTop,
                amount = Math.min((scroll-start)/step, max);
            top.style.boxShadow = '0 0 '+amount+'px '+color;
        };
    var touchThrottle = 10,
        touchThrottleStart = touchThrottle;
    addEvent(win, 'scroll', function(e) {
        if (touchThrottle == 0) {
            setShadow();
            touchThrottle = touchThrottleStart;
        }
        touchThrottle--;
    });
    addEvent(win, 'touchmove', function(e) {
        setShadow();
    });
}(this, this.document));


// History Ajax Links
historyAjax = [];
historyAjax.config = {
    title: "Bradshaw’s Handbook for Tourists in Great Britain & Ireland"
};
(function() {
    function findUpTag(el, tag) {
        while (el.parentNode) {
            el = el.parentNode;
            if (el.tagName === tag)
                return el;
        }
        return false;
    }
    function getParts(href) {
        var parts = href.replace(window.location.protocol+'//','').split('/');
        parts.shift();
        if (parts[0] == '') {
            parts[0] = 'home';
        }
        return parts;
    }
    function updateNav(navName, active) {
        var nav = document.getElementById(navName);
        if (nav) {
            var navLinks = nav.getElementsByTagName('a'),
                navActive = document.getElementById(navName+'-'+active);
            if (navActive && navActive.className.indexOf('is-active') == -1) {
                for (var i=0, len=navLinks.length; i<len; ++i) {
                    if (navLinks[i].className.indexOf('is-active') !== -1) {
                        navLinks[i].className = navLinks[i].className.replace('is-active', '');
                        break;
                    }
                }
                navActive.className += 'is-active';
            }
        }
    }
    function loadPage(href) {
        var parts = getParts(href);
        updateNav('nav', parts[0]);
        var ajaxHref = href + ((href.indexOf('?') == -1)? '?' : '&amp;') + 'ajax=1'
        var req;
        if (window.XMLHttpRequest) {
            req = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            req = new ActiveXObject("Microsoft.XMLHTTP");
        }
        req.open("GET", ajaxHref, false);
        req.setRequestHeader('X-REQUESTED-WITH', 'xmlhttprequest');
        req.onreadystatechange = function() {
          if (req.readyState == 4) {
              document.body.scrollTop = document.documentElement.scrollTop = 0;
              document.getElementById('main').innerHTML = req.responseText;
              var title = main.getElementsByTagName('h1')[0];
              if (title) {
                  document.title = title.innerHTML.replace('&#38;', '&')+' - '+historyAjax.config.title;
              }
          }
        }
        req.send(null);
    }
    
    historyAjax.init = function() {
        if (!!(window.history && history.pushState)) {
            addEvent(window, 'click', function(e) {
                var link = e.target;
                if (link.tagName !== 'A') {
                    link = findUpTag(link, "A");
                }
                if (link && link.href.indexOf(document.domain) !== -1 && link.target == '' && link.href.indexOf('#') == -1) {
                    history.pushState({ajax: true}, null, link.href);
                    loadPage(link.href);
                    e.preventDefault();
                }
            });
            window.setTimeout(function() {
                addEvent(window, 'popstate', function(e) {
                    if(e.state) {
                        loadPage(location.pathname);
                    }
                });
            }, 1);
            history.replaceState({
               ajax: true
            }, null, window.location);
        }
    }
})();

historyAjax.init();