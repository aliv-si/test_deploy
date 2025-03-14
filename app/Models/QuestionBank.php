<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuestionBank extends Model
{

    use HasFactory;

    protected $table = 'question_banks';
    protected $primaryKey = 'id_soal';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'subject',
        'semester',
        'category',
        'file_path_soal',
        'tanggal_upload'
    ];

    protected $casts = [
        'semester' => 'integer',
        'tanggal_upload' => 'datetime',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}