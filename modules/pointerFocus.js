/**
 * Pointer Focus
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel
 */

export default class PointerFocus {
  constructor(elem) {
    this._elem = elem || document.getElementById('pointerFocus');
    const isMobile = window.innerWidth < 900;
    if (!this._elem || isMobile) return;

    // ポインター軌跡保持
    this._points = [];
    this._pointIndex = 0;

    // 実際のフォーカス位置 (リサイズしてから初期化)
    this._windowResizeHandler(this._elem);
    this._focus = {
      x: this._elem.width / 2,
      y: this._elem.height / 2
    }

    window.addEventListener('mousemove', (event) => {
      const rect = this._elem.getBoundingClientRect();
      this._points.push({
        x: event.clientX - rect.left,
        y: event.clientY - rect.top
      });
    });

    window.addEventListener('resize', () => {
      this._windowResizeHandler(this._elem);
    });

    this._update();
  }

  _update() {
    if (this._points.length > 0 && this._pointIndex < this._points.length) {
      const pointX = this._points[this._pointIndex].x;
      const pointY = this._points[this._pointIndex].y;
      const distance = Math.sqrt(Math.pow((this._focus.x - pointX), 2) + Math.pow((this._focus.y - pointY), 2));
      const radius = 48;
      const ratio = distance / (radius * 4);

      if (ratio < .5) {
        this._focus.x = this._focus.x * ratio + pointX * (1 - ratio);
        this._focus.y = this._focus.y * ratio + pointY * (1 - ratio);
        if (Math.abs(this._focus.x - pointX) < 1 && Math.abs(this._focus.y - pointY) < 1) {
          this._pointIndex++;
        }
      } else {
        this._focus.x = (this._focus.x + pointX) / 2;
        this._focus.y = (this._focus.y + pointY) / 2;
        this._pointIndex++;
      }

    }

    this._draw(this._focus.x, this._focus.y);

    requestAnimationFrame(() => {
      this._update();
    });
  }

  _draw(x = 0, y = 0) {
    const canvas = this._elem;
    const ctx = canvas.getContext('2d');
    const radius = 48;

    // 背景グラデーション作成
    const diff = (canvas.width - canvas.height) / 2;
    const canvasGradient = ctx.createLinearGradient(diff, 0, diff + canvas.height, canvas.height);
    canvasGradient.addColorStop(0.00, '#d3171a');
    canvasGradient.addColorStop(0.50, '#d3171a');
    canvasGradient.addColorStop(0.51, '#1b3168');
    canvasGradient.addColorStop(1.00, '#1b3168');

    // 前の描画を削除
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // ポインターグラデーション作成
    const pointerGradient = ctx.createRadialGradient(x, y, 0, x, y, radius);
    pointerGradient.addColorStop(0.0, 'rgba(255, 255, 255, 0)');
    pointerGradient.addColorStop(1.0, 'rgba(255, 255, 255, 1)');

    // ポインターを描画
    // 線形グラデーションで描画
    ctx.beginPath();
    ctx.fillStyle = canvasGradient;
    ctx.arc(x, y, radius - 1, 0, Math.PI * 2);
    ctx.fill();

    // 境界内側を白でぼかし
    ctx.beginPath();
    ctx.fillStyle = pointerGradient;
    ctx.arc(x, y, radius, 0, Math.PI * 2);
    ctx.fill();
  }

  _loop(timeCurrent) {
    if (!this._timeStart) {
      this._timeStart = timeCurrent;
    }
    const timeElapsed = timeCurrent - this._timeStart;

    const point = this._easing(timeElapsed, this._start, this._distance, this._duration);
    window.scrollTo(0, next);

    timeElapsed < this._duration
      ? window.requestAnimationFrame(this._loop.bind(this))
      : this._done();
  }

  _done() {
    window.scrollTo(0, this._start + this._distance);
    this.timeStart = false;
  }

  _easing(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }

  _windowResizeHandler(canvas) {
    const rect = canvas.getBoundingClientRect();
    canvas.width = rect.width;
    canvas.height = rect.height;
  }
}
