// JSON Renderer

export default class JSONRenderer {
  constructor(options = {}) {
    this._url = options.url || './data.json';
    this._len = options.len || 12;
    this._tableName = options.tableName || 'json-renderer'
    this._table = document.getElementById(this._tableName );
    this._thead = this._table.querySelector('thead');
    this._tbody = this._table.querySelector('tbody');
    this._template = document.getElementById(`${this._tableName}-template`);
    this._handleEvents();
  }

  _handleEvents() {
    this._thead.querySelectorAll('th').forEach((th) => {
      th.addEventListener('click', (event) => {
        const elem = event.target;
        const prop = elem.dataset.name;
        this._sort(prop);
      })
    });
  }

  _filter(prop, keyword) {
    const data = this._data.filter((dt) => dt[prop].indexOf(keyword) > -1 );
    this._renderTemplate(data);
  }

  _sort(prop) {
    const data = this._data.sort((a, b) => a[prop] - b[prop]);
    this._renderTemplate(data);
  }

  async init() {
    this._data = await this._fetchJSON(this._url);
    this._sort('id');
  }

  async _fetchJSON(url) {
    const resp = await fetch(url, { method: "POST" });
    return resp.json();
  }

  _renderTemplate(data) {
    this._tbody.innerHTML = '';
    const len = data.length;
    for (let i = 0; i < len; i++) {
      const tr = document.importNode(this._template.content, true);
      tr.querySelector(`.${this._tableName}-col-name`).textContent = data[i].name;
      tr.querySelector(`.${this._tableName}-col-address`).textContent = data[i].address;
      tr.querySelector(`.${this._tableName}-col-cat1`).textContent = data[i].cat1 ? '◯' : '-';
      tr.querySelector(`.${this._tableName}-col-cat2`).textContent = data[i].cat2 ? '◯' : '-';
      tr.querySelector(`.${this._tableName}-col-cat3`).textContent = data[i].cat3 ? '◯' : '-';
      tr.querySelector(`.${this._tableName}-col-cat4`).textContent = data[i].cat4 ? '◯' : '-';
      //tr.querySelector(`.${this._tableName}-col-tel`).textContent = data[i].tel;
      this._tbody.appendChild(tr);
    }
  }
}
