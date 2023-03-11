<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechApp</title>
  <script src="{{asset('/js/jquery-3.6.1.min.js')}}" defer></script>
  <script src="{{asset('/js/accordion.js')}}" defer></script>
</head>
<body>
  @include('components.header')

  {{-- このファイルではph1向けに書いているが、本来は初めのボタン選択で中身を各ph仕様に変えていく --}}
  <section>
    <div>
      <h2>week絞り込み</h2>
      <label for="week">week</label>
      <input type="text" name="week" id="week">
      <input type="button" value="検索" id="filter-button">
    </div>

    <ul class="answer-list">

      <li class="answer-item" week="17">
          <div>
            <h3>week17</h3>
            <button class="detail-button">詳細</button>
          </div>
          <ul class="answer-content-list">
            <li>
              <p>Dockerをインストール出来ましたか？	</p>
              <button>ヒントへ</button>
            </li>
            <li>
              <p>テンプレートをfork&clone出来ましたか？	</p>
              <button>ヒントへ</button>
            </li>
            <li>
              <p>docker-compose up を実行しましたか？</p>
              <button>ヒントへ</button>
            </li>
          </ul>
      </li>

      <li class="answer-item" week="18">
          <div>
            <h3>week18</h3>
            <button class="detail-button">詳細</button>
          </div> 
          <ul class="answer-content-list">
            <li>
              <p>https://it-biz.online/it-skills/database/ を読んで、内容を理解しましたか？</p>
              <button>ヒントへ</button>
            </li>
            <li>
              <p>問題テーブル、選択肢テーブルの設計は理解できましたか？</p>
              <button>ヒントへ</button>
            </li>
            <li>
              <p>正規化について理解できましたか？</p>
              <button>ヒントへ</button>
            </li>
          </ul>
      </li>

      <li class="answer-item" week="19">
        <div>
          <h3>week19</h3>
          <button class="detail-button">詳細</button>
        </div> 
        <ul class="answer-content-list">
          <li>
            <p>phpMyAdminの画面を開くことが出来ましたか？	</p>
            <button>ヒントへ</button>
          </li>
          <li>
            <p>questionsテーブルを作成することが出来ましたか？</p>
            <button>ヒントへ</button>
          </li>
          <li>
            <p>choicesテーブルを作成することが出来ましたか？</p>
            <button>ヒントへ</button>
          </li>
        </ul>
      </li>

      <li class="answer-item" week="20">
        <div>
          <h3>week20</h3>
          <button class="detail-button">詳細</button>
        </div> 
        <ul class="answer-content-list">
          <li>
            <p>PDOについて理解できましたか？</p>
            <button>ヒントへ</button>
          </li>
          <li>
            <p>dbconnect.phpを作成し、DB接続処理を実装出来ましたか？</p>
            <button>ヒントへ</button>
          </li>
          <li>
            <p>"正しい接続情報で、DB接続処理が正常に出来ることを確認しましたか？白い画面になります"</p>
            <button>ヒントへ</button>
          </li>
        </ul>
      </li>

    </ul>

  </section>
</body>
</html>