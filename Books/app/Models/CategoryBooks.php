<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBooks extends Model
{
    use HasFactory;
    protected $guard = 'id';
    public function Book()
    {
        return $this->hasMany(Books::class);
    }
}
