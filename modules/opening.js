/**
 * Opening
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel
 */

export default class Opening {
  constructor(elem) {
    this._elem = elem || document.getElementById('opening');
    if (!this._elem) return;

    const title = this._elem.querySelectorAll('.opening__title');
    const firstTitle = this._elem.querySelector('.opening__title.--num_1');
    const header = document.getElementById('header');
    const main = document.getElementById('main');
    const drawer = document.getElementById('drawer');
    const video = document.getElementById('coverVideo');
    const videoMb = document.getElementById('coverVideoMb');
    
    header.classList.add('--hide');
    main.classList.add('--hide');
    drawer.classList.add('--hide');
    video.classList.add('--hide');
    videoMb.classList.add('--hide');

    video.loop = true;
    video.play();
    videoMb.play();

    window.setTimeout(() => {
      this._transitionEnd(firstTitle, () => {
        title.forEach((elem) => {
          elem.classList.add('--open');
        })
      }).then(() => {
        this._elem.classList.add('--collapse');
        header.classList.remove('--hide');
        main.classList.remove('--hide');
        drawer.classList.remove('--hide');
        video.classList.remove('--hide');
        videoMb.classList.remove('--hide');
      });
    }, 0);
  }

  _transitionEnd(elem, func) {
    let callback;
    const promise = new Promise((resolve, reject) => {
      callback = () => resolve(elem);
      elem.addEventListener('transitionend', callback);
    });
    func();
    promise.then((elem) => {
      elem.removeEventListener('transitionend', callback);
    });
    return promise;
  }
}
