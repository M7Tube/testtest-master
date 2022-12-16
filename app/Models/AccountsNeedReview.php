<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountsNeedReview extends Model
{
    use HasFactory;
    protected $table = "accounts_need_reviews";
    protected $primaryKey = "accounts_need_review_id";
    protected $fillable = [
        'name',
        'email',
        'message',
        'url',
        'status',
    ];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('email', 'like', '%' . $search . '%')->orWhere('name', 'like', '%' . $search . '%');
    }
}
