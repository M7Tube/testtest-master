<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use HasFactory;
    protected $table = "statistics";
    protected $primaryKey = "statistic_id";
    protected $fillable = [
        'work_complated',
        'years_of_experience',
        'total_clients',
        'award_won',
    ];
}
