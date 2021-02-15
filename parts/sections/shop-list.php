          <h3>小売店一覧</h3>
          <p>地域を選択してください。</p>
          <select id="select-tag" name="location">
            <option value="福井">福井</option>
            <option value="あわら">あわら</option>
            <option value="坂井">坂井</option>
            <option value="武生">武生</option>
            <option value="越前">越前</option>
            <option value="鯖江">鯖江</option>
            <option value="富山">富山</option>
            <option value="愛知">愛知</option>
            <option value="北海道">北海道</option>
            <option value="山形">山形</option>
            <option value="埼玉">埼玉</option>
            <option value="京都">京都</option>
          </select>
          <div class="table-fluid">
            <table id="shop-list" class="table">
              <thead>
                <tr>
                  <th class="shop-list-col-name" data-name="name">店舗名</th>
                  <th class="shop-list-col-address" data-name="address">所在地</th>
                  <th class="shop-list-col-cat1" data-name="cat1">塩</th>
                  <th class="shop-list-col-cat2" data-name="cat2">雑穀</th>
                  <th class="shop-list-col-cat3" data-name="cat3">潮麦</th>
                  <th class="shop-list-col-cat4" data-name="cat4">その他</th>
                  <!--<th data-name="tel">電話番号</th>-->
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          <template id="shop-list-template">
            <tr class="shop-list-row">
              <td class="shop-list-col-name"></td>
              <td class="shop-list-col-address"></td>
              <td class="shop-list-col-cat1"></td>
              <td class="shop-list-col-cat2"></td>
              <td class="shop-list-col-cat3"></td>
              <td class="shop-list-col-cat4"></td>
              <!--<td class="shop-list-col-tel"></td>-->
            </tr>
          </template>
