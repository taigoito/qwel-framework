/*
 * Author: Taigo Ito
 * Site: https://qwel.design
 * Twitter: @taigoito
 * Location: Fukui, Japan
 */

import {ssUrl} from '../config.js';
import Scrolling from './_scrolling.js';
import Slidebar from './_slidebar.js';
import JSONRenderer from './_json-renderer.js'
import renderEvilIcons from './_evil-icons.js';

const HOST = `${location.protocol}//${location.hostname}`;
const ROOT = '/';

// Scrolling init
const scrolling = new Scrolling({
  offset: -1
});
scrolling.init();

// Slidebar init
const slidebar = new Slidebar({
  root: `${HOST}${ROOT}`,
  nav: document.querySelector('.footer-nav')
});
slidebar.init();

// JSON Renderer
const bodyId = document.body.id;
if (bodyId == 'shop') {
  (async () => {
    const jsonRenderer = new JSONRenderer({
      url: ssUrl,
      tableName: 'shop-list'
    });
    jsonRenderer.init();
  
    const tagSelector = document.getElementById('select-tag');
    tagSelector.addEventListener('change', () => {
      const keyword = tagSelector.value;
      jsonRenderer._filter('tags', keyword);
    });
  })();
}

// Icons init
renderEvilIcons();
