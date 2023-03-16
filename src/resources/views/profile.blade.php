<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechApp</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('/js/jquery-3.6.1.min.js') }}" defer></script>
    <script src="{{asset('js/page_transition.js')}}" defer></script>
</head>

<body class="">
    <div class="bg-black opacity-50 h-screen absolute top-0 left-0 w-screen"></div>
    {{-- 本来はページを作るというよりは、モーダルで表示させたい！そこの遷移とか子要素として加えるのかとかは話し合って決めたい --}}

    @include('components.header')
    @include('components.profile')
</body>

</html>
