<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\Models\AllTasks
 *
 * @property int $id
 * @property int $user_id
 * @property int $difficulty_type_id
 * @property string $type
 * @property int $count_examples
 * @property int $mistakes
 * @property int $time
 * @property int $points
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\AllTasksFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks query()
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks whereCountExamples($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks whereDifficultyTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks whereMistakes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllTasks whereUserId($value)
 * @mixin \Eloquent
 */
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
