<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = TRUE;
    public $timestamps = TRUE;
    protected $fillable = ['postTitle','text'];
    protected $guarded = ['*'];
    protected $dates = ['deleted_at'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function getpostTitleAttribute($value)
    {
      return '<p style="color:red;"> get ' . $value . '</p>';
    }

    public function setpostTitleAttribute($value)
    {
      $this->attributes['postTitle'] = $value;
    }
}
