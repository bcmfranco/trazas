<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = "posts";
    public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function comentarios(){
        return $this->hasMany("App\Comentario", "post_id");
    }

    public function user() {
        return $this->belongsTo("App\User", "user_id");
    }
}
