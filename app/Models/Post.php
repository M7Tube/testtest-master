<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $primaryKey = "post_id";
    protected $fillable = [
        'main_title',
        'title',
        'body',
        'picture',
        'keywords', 'user_id'
    ];


    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('main_title', 'like', '%' . $search . '%')->orWhere('title', 'like', '%' . $search . '%');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
