<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'department_id',
        'order',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id_department');
    }
}
