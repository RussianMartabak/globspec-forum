<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['judul', 'content', 'thumbnail', 'kategori_id'];
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function category(){
        return $this->belongsTo('App\kategori', 'kategori_id');
    }
}
