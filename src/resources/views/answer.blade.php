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

      <li class="answer-item" week="1">
          <div>
            <h3>week1</h3>
            <button class="detail-button">詳細</button>
          </div>
          <ul class="answer-content-list">
            <li>
              <p>Google Chromeをインストールしましたか？</p>
              <button>ヒントへ</button>
            </li>
            <li>
              <p>Visual Studio Codeをインストールしましたか？</p>
              <button>ヒントへ</button>
            </li>
            <li>
              <p>Visual Studio Codeの初期設定(editorの設定と日本語化)は出来ましたか？</p>
              <button>ヒントへ</button>
            </li>
          </ul>
      </li>

      <li class="answer-item" week="2">
          <div>
            <h3>week2</h3>
            <button class="detail-button">詳細</button>
          </div> 
          <ul class="answer-content-list">
            <li>
              <p>Google Chromeをインストールしましたか？</p>
              <button>ヒントへ</button>
            </li>
            <li>
              <p>Visual Studio Codeをインストールしましたか？</p>
              <button>ヒントへ</button>
            </li>
            <li>
              <p>Visual Studio Codeの初期設定(editorの設定と日本語化)は出来ましたか？</p>
              <button>ヒントへ</button>
            </li>
          </ul>
      </li>

      <li class="answer-item" week="3">
        <div>
          <h3>week3</h3>
          <button class="detail-button">詳細</button>
        </div> 
        <ul class="answer-content-list">
          <li>
            <p>Gitコマンドをインストールしましたか？</p>
            <button>ヒントへ</button>
          </li>
          <li>
            <p>"GitHubのposse-apにあるリポジトリ「template-ph1-website」をforkできましたか？
              ※リンク: https://github.com/posse-ap/template-ph1-website"</p>
            <button>ヒントへ</button>
          </li>
          <li>
            <p>forkした「template-ph1-website」をcloneできましたか？</p>
            <button>ヒントへ</button>
          </li>
        </ul>
      </li>

      <li class="answer-item" week="4">
        <div>
          <h3>week4</h3>
          <button class="detail-button">詳細</button>
        </div> 
        <ul class="answer-content-list">
          <li>
            <p>htmlファイルの中でstyle指定をしていないことを確認しましたか？</p>
            <button>ヒントへ</button>
          </li>
          <li>
            <p>全体的な見た目はデザインと同じになっていますか？</p>
            <button>ヒントへ</button>
          </li>
          <li>
            <p>"メインビジュアルを作成できましたか？
              - 画像と見出しが被さるような見た目で実装できましたか？
              - 「Scroll Down」を左下に配置できましたか？"</p>
            <button>ヒントへ</button>
          </li>
        </ul>
      </li>

    </ul>

  </section>
</body>
</html>