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

<body>
    @include('components.header')
    @include('components.profile')
</body>

</html>
