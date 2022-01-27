<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_image',
        'owner_name',
        'owner_image',
        'category_id',
        'status',
        'one_year_ago',
        'two_year_ago',
        'dividen',
        'public_stock',
        'profit_prediction',
        'needed_fund',
        'video_profile',
        'instagram',
        'caption',
        'user_id',
    ];
}
