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

  {{-- 質問投稿フォーム --}}
  <section>
    <h1>質問投稿フォームはこちら</h1>
    <button type="button" onclick="location.href='{{ route('./question') }}' ">質問</button>
  </section>
</body>
</html>