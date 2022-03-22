/**
 * Section Fade In
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel
 */

export default class SectionFadeIn {
  constructor() {
    const elem = document.querySelector('.--sectionFocus');
    if (!elem) return;

    const sections = this._getSections(elem);
    const index = this._getSectionIndex(elem);
    for (let i = 0; i <= index; i ++) {
      const isDone = sections[i].classList.contains('--fadeIn');
      if (!isDone) sections[i].classList.add('--fadeIn');
    }

    window.addEventListener('scroll', () => {
      this._fade(elem);
    });
  }

  _fade(elem) {
    // 位置情報
    const sections = this._getSections(elem);
    const index = this._getSectionIndex(elem);
    if (index < 1000) {
      const isDone = sections[index].classList.contains('--fadeIn');
      const clientRect = sections[index].getBoundingClientRect();
      
      // カレントセクションのトップがウィンドウ4分の3の位置を跨いだ時にフェードイン
      if (!isDone && clientRect.top - clientRect.height / 2 < window.innerHeight * 3 / 4) {
        sections[index].classList.add('--fadeIn');
      }
    }
  }

  _getSectionIndex(elem) {
    const sections = this._getSections(elem);
    const len = sections.length;
    for (let i = 0; i < len; i++) {
      const clientRect = sections[i].getBoundingClientRect();
      // ウィンドウ半分以下に位置する最近のセクションを取得
      if (window.innerHeight / 2 < clientRect.top) {
        return i;
      }
    }
    return 1000;
  }
  
  _getSections(elem) {
    const sections = [];
    for (const section of elem.children) {
      sections.push(section);
    }
    return sections
  }
}
