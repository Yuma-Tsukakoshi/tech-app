<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechApp</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('/js/jquery-3.6.1.min.js')}}" defer></script>
    <script src="{{ asset('/js/page_transition.js')}}" defer></script>
</head>

<body>
    @include('components.header')
    @include('components.profile')

    <section class="mx-80">
        <h1 class="my-16 text-4xl text-center">ヒント詳細ページ</h1>
        <div class="flex my-10">
            <h2 class="flex text-2xl w-1/4">作成者:</h2>
            <p class="text-2xl cursor-pointer" id="transition-profile">プロフィール画像を持ってくる</p>
        </div>
        <div class="flex my-10"> 
            <h2 class="text-2xl w-1/4">質問内容:</h2>
            <p class="text-2xl">データベースからデータを持ってくる</p>
        </div>
        <div class="flex my-10">
            <h2 class="text-2xl w-1/4">検索ヒントワード:</h2>
            <p class="text-2xl">データベースからデータを持ってくる</p>
        </div>
        <div class="flex my-10">
            <h2 class="text-2xl w-1/4">タイマー設定:</h2>

        </div>
        <div class="flex my-10">
            <h2 class="text-2xl w-1/4">参考サイトURL:</h2>
            <p class="text-2xl">データベースからデータを持ってくる</p>
        </div>
        <div class="flex my-20 justify-evenly">
            <button type="button" class="text-3xl bg-blue-500 hover:bg-blue-400 text-white rounded-3xl shadow-2xl py-4 px-6 border-b-4 border-blue-800 hover:border-blue-500">わかった！！</button>
            <button type="button" id="transition-question" class="text-3xl bg-blue-500 hover:bg-blue-400 text-white rounded-3xl shadow-2xl py-4 px-4 border-b-4 border-blue-800 hover:border-blue-500">わからなかった…</button>
        </div>
    </section>
</body>

</html>
