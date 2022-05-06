<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category_tbl extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'user_category',
        
    ];

}
