/**
 * Section Focus
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel
 */

export default class SectionFocus {
  constructor(elem) {
    elem = elem || document.getElementById('sectionFocus');
    const sections = document.querySelector('.--sectionFocus');
    const isMobile = window.innerWidth < 900;
    if (!elem || !sections || isMobile) return;

    this._windowResizeHandler(elem, sections);

    window.addEventListener('scroll', () => {
      this._draw(elem, sections);
    });

    window.addEventListener('resize', () => {
      this._windowResizeHandler(elem, sections);
    });
  }

  _draw(canvas, sections) {
    const ctx = canvas.getContext('2d');
    
    // 位置情報から色生成
    const section = this._getSection(sections);
    const sectionRect = section.getBoundingClientRect();
    const pos = sectionRect.top + window.pageYOffset - this._top;
    const color = this._getColor(pos);
    const headerHeight = 80;
    const radius = (canvas.height - headerHeight) / 2;
    const diff = (canvas.width - (canvas.height - headerHeight)) / 2;

    // 円形グラデーション作成
    const gradient = ctx.createRadialGradient(radius + diff, radius + headerHeight, 0, radius + diff, radius + headerHeight, radius);
    gradient.addColorStop(0.0, color.start);
    gradient.addColorStop(1.0, color.end);

    // 前の描画を削除
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // 描画
    const currentPos = window.innerHeight / 2 + window.pageYOffset;
    if (this._top < currentPos) {
      ctx.beginPath();
      ctx.fillStyle = gradient;
      ctx.arc(radius + diff, radius + headerHeight, radius, 0, Math.PI * 2);
      ctx.fill();
    }
  }
  
  _getSection(elem) {
    const sections = this._getSections(elem);
    let current = sections[0];
    let clientRect = current.getBoundingClientRect();
    let min = clientRect.top - this._top;
    sections.forEach((section) => {
      clientRect = section.getBoundingClientRect();
      const clientRectTop = clientRect.top - this._top;
      if (clientRectTop <= 0 && min <= clientRectTop) {
        current = section;
        min = clientRectTop;
      }
    });
    return current;
  }
  
  _getSections(elem) {
    const sections = [];
    for (const section of elem.children) {
      sections.push(section);
    }
    return sections
  }

  _getColor(pos) {
    const startHue = 359;
    const startSaturation = 80;
    const startLightness = 46;
    const endHue = 223;
    const endSaturation = 59;
    const endLightness = 26;

    const progress = pos / (this._bottom - this._top);
    const hue = (endHue - startHue) * progress + startHue;
    const saturation = (endSaturation - startSaturation) * progress + startSaturation;
    const lightness = (endLightness - startLightness) * progress + startLightness;

    return {
      start: `hsla(${hue}, ${saturation}%, ${lightness}%, .75)`,
      end: `hsla(${hue}, ${saturation}%, ${lightness}%, 0)`
    }

  }

  _getSectionSize(elem) {
    const rect = elem.getBoundingClientRect();
    this._top = window.pageYOffset + rect.top;
    this._bottom = window.pageYOffset + rect.bottom;
  }

  _windowResizeHandler(canvas, target) {
    const rect = canvas.getBoundingClientRect();
    canvas.width = rect.width;
    canvas.height = rect.height;

    this._getSectionSize(target);
  }
}
