<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    // public $table = "comentarios";
    // public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];

    public function post() {
        return $this->belongsTo("App\Post", "post_id");
    }

    public function user() {
        return $this->belongsTo("App\User", "user_id");
    }
}
