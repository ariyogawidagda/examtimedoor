<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $guard = 'id';
    public function Rating()
    {
        return $this->hasMany(Rating::class);
    }
    public function Author()
    {
        return $this->belongsTo(Authors::class, 'id_author', 'id');
    }
    public function Category()
    {
        return $this->belongsTo(CategoryBooks::class, 'id_category', 'id');
    }
}
