<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserQuiz
 *
 * @property int $user_quiz_id
 * @property int $user_id
 * @property int $quiz_id
 * @property int $user_answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\UserQuizFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuiz newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuiz newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuiz query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuiz whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuiz whereQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuiz whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuiz whereUserAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuiz whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserQuiz whereUserQuizId($value)
 * @mixin \Eloquent
 */
class UserQuiz extends Model
{
    use HasFactory;
}
