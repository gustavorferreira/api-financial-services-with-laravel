<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'sch_register.statuses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'status_name',
        'description'
    ];
}