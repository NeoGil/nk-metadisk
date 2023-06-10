<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fragment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'guide_id'
    ];

    public function fragment(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Guide::class);
    }

    public function scopeAllPaginate($query, $numbers)
    {
        return $query->orderBy('created_at', 'desc')->paginate($numbers);
    }
}
