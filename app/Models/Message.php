<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'body'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
