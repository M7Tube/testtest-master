<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientMessages extends Model
{
    use HasFactory;
    protected $table = "client_messages";
    protected $primaryKey = "message_id";
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];


    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('name', 'like', '%' . $search . '%')->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('subject', 'like', '%' . $search . '%')
            ->orWhere('message', 'like', '%' . $search . '%');
    }
}
