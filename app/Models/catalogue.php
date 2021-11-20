<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogue extends Model
{
    use HasFactory;

    protected $fillable  = [
        'name', 'state'
    ];

    public function products()
    {
        return $this->belongsToMany(product::class)->withTimestamps();
    }

}
