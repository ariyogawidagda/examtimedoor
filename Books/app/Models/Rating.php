<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $guard = 'id';
    public function Bookrating()
    {
        return $this->belongsTo(Books::class, 'id_book', 'id');
    }
    public function Author()
    {
        return $this->belongsTo(Authors::class, 'id_author', 'id');
    }
}
