<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Array_;

/**
 * App\Models\Question
 *
 * @property int $question_id
 * @property string $text
 * @property string $answer
 * @property int $difficulty_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereDifficultyTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';
    protected $primaryKey = 'question_id';
    protected $fillable = [
        'text',
        'answer',
        'difficulty_type_id',
        'type'
    ];

    public function getRandomQuestions(int $count, int $difficultyTypeId): array
    {
        $types = [
            'summ',
            'diff',
            'mult',
            'div'
        ];

        $randomQuestionIds = [];

        foreach ($types as $type) {
            $questionIds = array_keys(
                self::select(['question_id'])
                    ->where('type', '=', $type)
                    ->where('difficulty_type_id', '=', $difficultyTypeId)
                    ->get()->toArray()
            );
            $randomQuestionIds = array_merge ( $randomQuestionIds, array_rand ( (array)$questionIds, $count / 4 ) );

        }
        $questions = self::select()->whereIn('question_id', $randomQuestionIds)->get()->toArray();
        return $questions;
    }
};
