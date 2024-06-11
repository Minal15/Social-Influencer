<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['post_id', 'name', 'description', 'price', 'affiliate_link', 'thumbnail'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
