@extends('layouts.each_ph_answer')

@section('answer-items')
@for ($i = 17; $i <= 32; $i++)
<li class="answer-item m-4" week="{{$i}}">
  <div class="flex justify-evenly m-1 p-1 font-bold text-lg">
    <h3>week{{$i}}</h3>
    <button class="detail-button bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-6 border-b-4 border-blue-800 hover:border-blue-500 rounded-3xl shadow-xl">詳細</button>
  </div>
  <ul class="answer-content-list mx-8 bg-gray-50 shadow-xl">
    <li class="flex justify-between my-6 mx-2 p-2 font-bold bg-slate-100 rounded-xl shadow-xl">
      <p>Dockerをインストール出来ましたか？</p>
      <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-6 border-b-4 border-blue-800 hover:border-blue-500 rounded-3xl shadow-xl" id="transition-hint">ヒントへ</button>
    </li>
    <li class="flex justify-between my-6 mx-2 p-2 font-bold bg-slate-100 rounded-xl shadow-xl">
      <p>テンプレートをfork&clone出来ましたか？</p>
      <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-6 border-b-4 border-blue-800 hover:border-blue-500 rounded-3xl shadow-xl" id="transition-hint">ヒントへ</button>
    </li>
    <li class="flex justify-between my-6 mx-2 p-2 font-bold bg-slate-100 rounded-xl shadow-xl">
      <p>docker-compose up を実行しましたか？</p>
      <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-6 border-b-4 border-blue-800 hover:border-blue-500 rounded-3xl shadow-xl" id="transition-hint">ヒントへ</button>
    </li>
  </ul>
</li>
@endfor
@endsection