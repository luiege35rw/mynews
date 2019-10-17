<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // 以下を追記
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );

    protected $fillable = ['title','body'];
    
    // 以下を追記
    // Newsモデルに関連付けを行う
    public function histories()
    {
      return $this->hasMany('App\History');

    }
}
