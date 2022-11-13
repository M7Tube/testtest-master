<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = "items";
    protected $primaryKey = "item_id";
    protected $fillable = [
        'ar_name',
        'en_name',
        'ar_desc',
        'en_desc',
        'picture',
        'price',
        'buy_link',
        'ar_buy_link_title_text',
        'en_buy_link_title_text',
        'buy_link_text',
        'free_item_with_email_send',
        'email_text',
        'email_file',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('en_name', 'like', '%' . $search . '%')->orWhere('ar_name', 'like', '%' . $search . '%');
    }
}
