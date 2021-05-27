<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserQuestion
 *
 * @property int $user_question_id
 * @property int $user_id
 * @property int $question_id
 * @property string $user_answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereUserAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuestion whereUserQuestionId($value)
 * @mixin \Eloquent
 */
class UserQuestion extends Model
{
    use HasFactory;
}
