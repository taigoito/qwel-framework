          <h3>小売店一覧</h3>
          <p>地域を選択してください。</p>
          <select id="select-tag" name="location">
            <option value="福井">福井</option>
            <option value="あわら">あわら</option>
            <!--<option value="坂井">坂井</option>-->
            <option value="武生">武生</option>
            <option value="越前">越前</option>
            <option value="鯖江">鯖江</option>
            <option value="嶺南">嶺南</option>
            <option value="石川">石川</option>
            <option value="白山、加賀方面">白山、加賀方面</option>
            <option value="能登方面">能登方面</option>
            <option value="北海道">北海道</option>
            <option value="宮城">宮城</option>
            <option value="秋田">秋田</option>
            <option value="山形">山形</option>
            <option value="福島">福島</option>
            <option value="埼玉">埼玉</option>
            <option value="千葉">千葉</option>
            <option value="富山">富山</option>
            <option value="長野">長野</option>
            <option value="愛知">愛知</option>
            <option value="三重">三重</option>
            <option value="京都">京都</option>
            <option value="兵庫">兵庫</option>
            <option value="和歌山">和歌山</option>
            <option value="山口">山口</option>
            <option value="徳島">徳島</option>
            <option value="福岡">福岡</option>
            <option value="熊本">熊本</option>
          </select>
          <div class="table-fluid">
            <table id="shop-list" class="table">
              <thead>
                <tr>
                  <th class="shop-list-col-name" data-name="name">店舗名</th>
                  <th class="shop-list-col-comment" data-name="comment">&nbsp;</th>
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
              <td class="shop-list-col-comment"></td>
              <td class="shop-list-col-cat1"></td>
              <td class="shop-list-col-cat2"></td>
              <td class="shop-list-col-cat3"></td>
              <td class="shop-list-col-cat4"></td>
              <!--<td class="shop-list-col-tel"></td>-->
            </tr>
          </template>
