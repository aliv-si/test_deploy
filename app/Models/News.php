<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $primaryKey = 'id_news';

    protected $fillable = [
        'image_news',
        'date',
        'news_headline',
        'news_content',
        'tag',
        'slug',
        'user_id',
    ];
    protected function casts(): array
    {
        return [
            'date' => 'datetime',
            'tag' => 'array',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}