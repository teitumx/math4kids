<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Quiz
 *
 * @method static \Database\Factories\QuizFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz query()
 * @mixin \Eloquent
 * @property int $quiz_id
 * @property string $text
 * @property mixed $answers
 * @property int $answer
 * @property int $difficulty_type_id
 * @property string|null $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereAnswers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereDifficultyTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereQuizId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quiz whereUpdatedAt($value)
 */
class Quiz extends Model
{
    use HasFactory;
}
