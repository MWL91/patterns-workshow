<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Viewer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'watcher_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function watch(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'watcher_id');
    }
}
