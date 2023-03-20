@extends('layouts.each_ph_answer')

@section('answer-items')
@for ($i = 1; $i <= 16; $i++)
<li class="answer-item m-4" week="{{$i}}">
  <div class="flex justify-evenly m-1 p-1 font-bold text-lg">
    <h3>week{{$i}}</h3>
    <button class="detail-button bg-blue-500 hover:bg-blue-400 text-white font-bold  border-b-4 border-blue-800 hover:border-blue-500 rounded-3xl shadow-xl py-2 px-4 md:py-1 md:px-6 text-xs md:text-sm lg:text-lg">詳細</button>
  </div>
  <ul class="answer-content-list mx-8 bg-gray-50 shadow-xl">
    <li class="flex justify-between my-6 mx-2 p-2 font-bold bg-slate-100 rounded-xl shadow-xl text-xs md:text-sm lg:text-lg">
      <p class="text-[8px] md:text-sm">Google Chromeをインストールしましたか？</p>
      <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 md:py-1 md:px-6 border-b-4 border-blue-800 hover:border-blue-500 rounded-3xl shadow-xl text-[8px] md:text-sm" id="transition-hint">ヒントへ</button>
    </li>
    <li class="flex justify-between my-6 mx-2 p-2 font-bold bg-slate-100 rounded-xl shadow-xl text-xs md:text-sm lg:text-lg">
      <p class="text-[8px] md:text-sm ">Visual Studio Codeをインストールしましたか？</p>
      <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 md:py-1 md:px-6 border-b-4 border-blue-800 hover:border-blue-500 rounded-3xl shadow-xl text-[8px] md:text-sm lg:text-lg" id="transition-hint">ヒントへ</button>
    </li>
    <li class="flex justify-between my-6 mx-2 p-2 font-bold bg-slate-100 rounded-xl shadow-xl text-xs md:text-sm lg:text-lg">
      <p class="text-[8px] md:text-sm">Visual Studio Codeの初期設定(editorの設定と日本語化)は出来ましたか？</p>
      <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 md:py-1 md:px-6 border-b-4 border-blue-800 hover:border-blue-500 rounded-3xl shadow-xl text-[8px] md:text-sm" id="transition-hint">ヒントへ</button>
    </li>
  </ul>
</li>
@endfor
@endsection