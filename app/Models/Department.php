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
        'full_name',
        'profil',
    ];


    public function members()
    {
        return $this->hasMany(Member::class, 'department_id', 'id_department');
    }

    public function workPrograms()
    {
        return $this->hasMany(WorkProgram::class, 'department_id', 'id_department')->orderBy('order');
    }
}
