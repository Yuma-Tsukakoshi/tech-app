<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Request $request) {
        return view('question' ,['msg' => "入力してね"]);
    }

    public function post(Request $request) {
        $validate_rule = [
            'problem' => 'required' ,
            'botttle-neck' => 'required' ,
            'screenshot' => 'required' ,
            'effort' => 'required' ,
            'link' => 'required' ,
            'file-name' => 'required' ,
        ];
        $this -> validate($request, $validate_rule);
        return view('question', ['msg' => "正しく入力されてます。"]);
    }
}
