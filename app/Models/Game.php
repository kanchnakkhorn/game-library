<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name', 'description', 'category_id', 'image_path'];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'user_libraries',
            'game_id',
            'user_id',
            'image_path'
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
