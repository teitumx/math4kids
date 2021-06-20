<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UsersStatistics
 *
 * @property int $id
 * @property int $user_id
 * @property int $count
 * @property int $total_time
 * @property int $points
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UsersStatistics newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsersStatistics newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsersStatistics query()
 * @method static \Illuminate\Database\Eloquent\Builder|UsersStatistics whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersStatistics whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersStatistics whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersStatistics wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersStatistics whereTotalTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersStatistics whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersStatistics whereUserId($value)
 * @mixin \Eloquent
 */
class UsersStatistics extends Model
{
    use HasFactory;
}
