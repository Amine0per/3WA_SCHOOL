<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoTask extends Model
{
    use HasFactory;
    protected $fillable = [
        'The_Task',
        'Task_Status',
    ];
}
