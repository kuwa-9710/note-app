<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // NoteモデルからUserモデルへの関連付け
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Noteモデル（親要素）からpageモデル（子要素）への関連付け
    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}
