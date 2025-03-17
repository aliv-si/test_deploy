<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_department'; 
    protected $table = 'departments'; 

    protected $fillable = [
        'name_department',
        'profil',
        'image_struktur',
        'work_program',
        'icon'
    ];
}