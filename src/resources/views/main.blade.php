<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechApp</title>
  @vite('resources/css/app.css')
  <script src="{{asset('/js/jquery-3.6.1.min.js')}}" defer></script>
  <script src="{{asset('/js/page_transition.js')}}" defer></script>
</head>
<body>
  @include('components.header')

  <p>{{ session('success_message') }}</p>
  
  <section>
    <ul class="mt-12">
      @for ($i = 1; $i <= 4; $i++)
        <li class="flex justify-evenly m-4 p-4 font-bold text-2xl">
          <h2>Ph{{$i}}</h2>
          <p>Ph{{$i}}の内容詳細</p>
          <button id="transition-ph{{$i}}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-800 hover:border-blue-500 rounded-3xl shadow-xl">ヒント一覧</button>
        </li>
      @endfor
    </ul>
  </section>

  {{-- 質問投稿フォーム --}}
  <section class="text-center font-bold mt-10">
    <h1 class="text-xl">質問投稿フォームはこちら</h1>
    {{-- <button type="button" onclick="location.href='{{ route('./question') }}' ">質問</button> --}}
    <button type="button" id="transition-question" class="bg-blue-500 hover:bg-blue-400 text-white font-bold my-4 py-2 px-6 border-b-4 border-blue-800 hover:border-blue-500 rounded-2xl text-xl shadow-xl">質問</button>
  </section>
</body>
</html>
