<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspiration extends Model
{
    use HasFactory;

    protected $table = 'aspirations';
    protected $primaryKey = 'id_aspiration';

    protected $fillable = ['email_student', 'class', 'aspiration', 'is_anonymous', 'date'];
}