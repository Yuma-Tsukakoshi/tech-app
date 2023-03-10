<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechApp</title>
</head>
<body>
  {{-- 共通パーツにする --}}
  <header>
    <img src="{{asset('/img/logo.svg')}}" alt="">
    <ul>
      <li><a href="https://event.posse-ap.com/login">イベントアプリ</a></li>
      <li><a href="">ログアウト</a></li>
    </ul>
  </header>

  <section>
    <h1>ヒント一覧</h1>
    <ul>
      @for ($i = 1; $i <= 4; $i++)
        <li>
          <h2>ph{{$i}}</h2>
          <p>ph{{$i}}の内容詳細</p>
          <button>ヒント一覧</button>
        </li>
      @endfor
    </ul>
  </section>
</body>
</html>