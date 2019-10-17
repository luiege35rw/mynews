<?php

namespace App;
use App\News;
// 以下を追記
use App\History;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'news_id' => 'required',
        'edited_at' => 'required',
    );
}
