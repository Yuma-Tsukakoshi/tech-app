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
        <div class="flex justify-evenly m-2 p-2 md:m-4 md:p-4 font-bold text-sm md:text-2xl">
            <h2 class="text-[6px]">week絞り込み</h2>
            {{-- TODO data(1,2,3,4)取ってきてph()のところに入れる --}}
            <form id="form" onsubmit="return false">
                <label for="week" class="cursor-pointer">week</label>
                <input type="text" name="week" id="week" class="text-center cursor-pointer bg-slate-200 rounded-3xl shadow-xl w-1/2 md:w-1/1" required>
                <input type="submit" value="検索" id="filter-button"
                    class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-5 border-b-4 border-blue-800 hover:border-blue-500 rounded-3xl shadow-xl text-xs md:text-sm lg:text-lg md:py-2 md:px-4">
            </form>
        </div>

        <ul class="answer-list">
            @yield('answer-items')
        </ul>

    </section>
</body>

</html>
