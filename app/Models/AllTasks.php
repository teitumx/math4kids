<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AllTasks extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'all_tasks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'last_name',
        'difficulty_type_id',
        'type',
        'count_examples',
        'mistakes',
        'points'
    ];
}
