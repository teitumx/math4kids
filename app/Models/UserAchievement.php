<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserAchievement
 *
 * @property int $user_id
 * @property int $achievement_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserAchievement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAchievement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAchievement query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAchievement whereAchievementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAchievement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAchievement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAchievement whereUserId($value)
 * @mixin \Eloquent
 */
class UserAchievement extends Model
{
    use HasFactory;
}
