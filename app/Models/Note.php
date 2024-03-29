<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'favorite',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    // collection filter

    public function scopeOwn($query){
       return $query->where('user_id', auth()->id());
    }


}
