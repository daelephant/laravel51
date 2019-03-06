<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Notifiable;
    //
    protected $fillable = [
        'title', 'content', 'publisted_at',
    ];
//    protected $fillable= ['title','content','publisted_at'];
}
