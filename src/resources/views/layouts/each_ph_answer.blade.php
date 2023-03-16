<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechApp</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('/js/jquery-3.6.1.min.js') }}" defer></script>
    <script src="{{ asset('/js/accordion.js') }}" defer></script>
    <script src="{{ asset('/js/page_transition.js') }}" defer></script>
</head>

<body>
    @include('components.header')

    <section>
        <div class="flex justify-evenly m-4 p-4 font-bold text-2xl">
            <h2>week絞り込み</h2>
            {{-- TODO data(1,2,3,4)取ってきてph()のところに入れる --}}
            <form action="http://localhost/main/ph1" method="post" id="form">
                <label for="week" class="cursor-pointer">week</label>
                <input type="text" name="week" id="week" class="text-center cursor-pointer bg-slate-200 rounded-3xl shadow-xl" required>
                <input type="submit" value="検索" id="filter-button"
                    class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-800 hover:border-blue-500 rounded-3xl shadow-xl">
            </form>
        </div>

        <ul class="answer-list">
            @yield('answer-items')
        </ul>

    </section>
</body>

</html>
