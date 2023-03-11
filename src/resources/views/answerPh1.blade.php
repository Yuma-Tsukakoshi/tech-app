@extends('layouts.each_ph_answer')

@section('answer-items')
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
      <p>"GitHubのposse-apにあるリポジトリ「template-ph1-website」を  forkできましたか？
        ※リンク: https://github.com/posse-ap/ template-ph1-website"</p>
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
      <p>htmlファイルの中でstyle指定をしていないことを確認しましたか？  </p>
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
@endsection