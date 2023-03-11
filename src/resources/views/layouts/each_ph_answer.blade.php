<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechApp</title>
  <script src="{{asset('/js/jquery-3.6.1.min.js')}}" defer></script>
  <script src="{{asset('/js/accordion.js')}}" defer></script>
</head>
<body>
  @include('components.header')

  <section>
    <div>
      <h2>week絞り込み</h2>
      <label for="week">week</label>
      <input type="text" name="week" id="week">
      <input type="button" value="検索" id="filter-button">
    </div>

    <ul class="answer-list">
      @yield('answer-items')
    </ul>

  </section>
</body>
</html>