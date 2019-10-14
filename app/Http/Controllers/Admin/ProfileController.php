<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 以下を追記することでProfile Modelが扱えるようになる
use App\Profile;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }
   
     public function create(Request $request)
{
    // dd(Profile::$rules);
      // 以下を追記
      // Varidationを行う
      $this->validate($request, Profile::$rules);
       
      $profile = new Profiles;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$profile->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $profile->image_path = basename($path);
     } else {
          $profile->image_path = null;
     }

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $profile->fill($form);
      $profile->save();
      // admin/profile/createにリダイレクトする
      return redirect('admin/profile/create');
}  
}   
        
        
        
        
        
        
        
        
    