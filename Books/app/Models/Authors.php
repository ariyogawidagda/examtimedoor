<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;
    protected $guard = 'id';

    public function Book()
    {
        return $this->hasMany(Book::class);
    }
    public function Rating()
    {
        return $this->hasMany(Rating::class);
    }
}
