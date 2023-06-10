<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function fragment(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Fragment::class);
    }


    public function scopeAllPaginate($query, $numbers)
    {
        return $query->orderBy('created_at', 'desc')->paginate($numbers);
    }
}
