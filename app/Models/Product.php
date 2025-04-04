<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];

    /**
     * Accessor to return the full image URL.
     */
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
