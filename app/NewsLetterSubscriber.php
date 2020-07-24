<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsLetterSubscriber extends Model
{
    use SoftDeletes;
    //
    protected $table = "kdm_news_subscribers";
    protected $fillable = ['mail','adresseip'];
    
}
