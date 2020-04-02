/*
 * Author: Taigo Ito
 * Site: https://qwel.design
 * Twitter: @taigoito
 * Location: Fukui, Japan
 */

import Scrolling from './_scrolling.js';
import Slidebar from './_slidebar.js';
import Slider from './_slider.js';
import renderEvilIcons from './_evil-icons.js';

// Scrolling init
const scrolling = new Scrolling();
scrolling.init();

// Slidebar init
const slidebar = new Slidebar({
  root: `${location.protocol}//${location.hostname}/oasis-ironwork/`
});
slidebar.init();

if (document.body.id === 'index') {
  // Arrow sign
  const elem = document.getElementById('arrow-sign');
  elem.classList.add('show');
  const callback = () => {
    elem.classList.remove('show');
    window.removeEventListener('scroll', callback);
  }
  window.addEventListener('scroll', callback);

  // Slider init
  const heroSlider = new Slider({
    slider: '#hero-slider',
    inner: '#hero-slider-inner',
    prev: '#hero-slider-prev',
    next: '#hero-slider-next',
    rate: .75,
    hasFade: true,
    autoPlay: 5000,
    duration: 1000
  });
  heroSlider.init();

  /*const worksSlider = new Slider({
    slider: '#works-slider',
    inner: '#works-slider-inner',
    prev: '#works-slider-prev',
    next: '#works-slider-next',
    hasDraggingHandler: true,
    hasWheelHandler: true,
    hasFade: true,
    hasCaption: true,
    caption: '#works-slider-caption'
  });
  worksSlider.init();*/
}

if (document.body.id === 'works') {
  // Works
  const elem = document.querySelector('.work-gallery');
  const content = document.querySelector('.work-content');
  const images = content.querySelectorAll('img'); // Since the post data is old, use the old specification
  //const images = content.querySelectorAll('.wp-block-image');
  images.forEach((image) => {
    elem.appendChild(image);
  });
}

if (document.body.id === 'about') {
  const elems = document.querySelectorAll('.page-sec');
  elems.forEach((elem) => {
    const col = elem.querySelector('.secondary-col');
    const images = elem.querySelectorAll('img');
    images.forEach((img) => {
      col.appendChild(img);
    });
  });
}

// Icons init
renderEvilIcons();
