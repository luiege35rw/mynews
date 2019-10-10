<?php

//Controllerの役割について、説明してください。

//ユーザーがアクセスするとROOTINGが作動する。
//その後、設定されたコントローラーにデータを渡す。
//Routingは来たアクセスをControllerに渡しているのではなく、
//厳密にはControllerの中のActionに渡している。

//  Controllerの役割
//ユーザーからの入力を受け取る
//ビューを選択、生成する
//VIEWに結果を渡し表示するデータを生成する。
//ビューへとデータベースからのデータを渡す役割がある。

// 課題５　



namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
    public function create()
    {
        return redirect('admin/profile/create');
    }
    public function edit()
    {
        return view('admin.profile.edit');
    }
    public function update()
    {
        return redirect('admin/profile/edit');
    }




