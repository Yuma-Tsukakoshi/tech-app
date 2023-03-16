<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;

class QuestionController extends Controller
{
    public function index(Request $request) {
        return view('question' ,['msg' => "入力してね"]);
    }

    public function post(QuestionRequest $request) {
        $validate_rule = [
            'problem' => 'required' ,
            'botttle-neck' => 'required' ,
            'screenshot' => 'required' ,
            'effort' => 'required' ,
            'link' => 'required' ,
            'file-name' => 'required' ,
        ];
        $this -> validate($request, $validate_rule);
        // return view('question', ['msg' => "正しく入力されてます。"]);
        return redirect('/main')->with('success_message', '質問投稿が完了しました');
    }
}
