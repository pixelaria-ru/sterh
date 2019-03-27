"use strict";

wrdTabs('.wrd-tabs');
"use strict";

function wrdTabs(container) {
  var containerLinks = document.querySelector(container);
  var tabsLinks = containerLinks.getElementsByClassName('wrd-tabs__link');

  for (var i = 0, max = tabsLinks.length; i < max; i += 1) {
    tabsLinks[i].addEventListener('click', function (e) {
      e.preventDefault(); // remove class active all links and tabs

      for (var _i = 0, _max = tabsLinks.length; _i < _max; _i += 1) {
        tabsLinks[_i].classList.remove('active');

        var _id = tabsLinks[_i].getAttribute('href').slice(1);

        document.getElementById(_id).classList.remove('active');
      } // add click link active class


      this.classList.add('active');
      var id = this.getAttribute('href').slice(1);
      document.getElementById(id).classList.add('active');
    });
  }
}
'use strict';

;

(function (window, document) {
  'use strict';

  var file = 'svg/sprite.svg',
      revision = 1;
  if (!document.createElementNS || !document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect) return true;

  var isLocalStorage = 'localStorage' in window && window['localStorage'] !== null,
      request,
      data,
      insertIT = function insertIT() {
    document.body.insertAdjacentHTML('afterbegin', data);
  },
      insert = function insert() {
    if (document.body) insertIT();else document.addEventListener('DOMContentLoaded', insertIT);
  };

  if (isLocalStorage && localStorage.getItem('inlineSVGrev') == revision) {
    data = localStorage.getItem('inlineSVGdata');

    if (data) {
      insert();
      return true;
    }
  }

  try {
    request = new XMLHttpRequest();
    request.open('GET', file, true);

    request.onload = function () {
      if (request.status >= 200 && request.status < 400) {
        data = request.responseText;
        insert();

        if (isLocalStorage) {
          localStorage.setItem('inlineSVGdata', data);
          localStorage.setItem('inlineSVGrev', revision);
        }
      }
    };

    request.send();
  } catch (e) {}
})(window, document);