<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'title',
        'subtitle',
        'period_label',
        'start_date',
        'description',
        'tags',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'tags'         => 'array',
        'is_featured'  => 'boolean',
        'start_date'   => 'date',
    ];

    /**
     * الترتيب الافتراضي لعرض الخبرات: حسب sort_order، ثم الأحدث تاريخاً أولاً.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderByDesc('start_date');
    }
}