<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'stock', 'image', 'state', 'id_catalogue'
    ];

    public function catalogues()
    {
        return $this->belongsToMany(catalogue::class)->withTimestamps();
    }

}
