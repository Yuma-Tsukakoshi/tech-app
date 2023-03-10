<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechApp</title>
  <script src="{{asset('/js/jquery-3.6.1.min.js')}}" defer></script>
</head>
<body>
  @include('components.header')

  {{-- このファイルではph1向けに書いているが、本来は初めのボタン選択で中身を各ph仕様に変えていく --}}
  <section>
    <div>
      <h2>week絞り込み</h2>
      <label for="week">week</label>
      <input type="text" value="1" id="week">
      <button>検索</button>
    </div>

    <ul>
      
      <li>
          <div class="acordion-header">
            <h3>week1</h3>
            <button>詳細</button>
          </div>
          <ul>
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

      <li>
          <div class="acordion-header">
            <h3>week2</h3>
            <button>詳細</button>
          </div>
          <ul>
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

    </ul>

  </section>
</body>
</html>