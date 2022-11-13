<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfFile extends Model
{
    use HasFactory;
    protected $table = "pdf_files";
    protected $primaryKey = "pdf_id";
    protected $fillable = [
        'pdf',
    ];

    public  static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('pdf', 'like', '%' . $search . '%');
    }
}
